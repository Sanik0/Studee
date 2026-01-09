<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Smalot\PdfParser\Parser as PdfParser;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpPresentation\IOFactory as PresentationIOFactory;

class QuizController extends Controller
{
    public function generate(Request $request)
    {
        // Validate the request
        $validator = \Validator::make($request->all(), [
            'file' => 'nullable|file|mimes:pdf,docx,ppt,pptx,txt|max:10240',
            'prompt' => 'nullable|string|max:5000',
            'quiz_type' => 'required|in:multiple-choice,true-false,identification,fill-blank'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator->errors());
        }

        $extractedText = '';
        $quizType = $request->input('quiz_type');

        // Check if file was uploaded
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            try {
                switch (strtolower($extension)) {
                    case 'pdf':
                        $extractedText = $this->extractPdfText($file);
                        break;

                    case 'docx':
                        $extractedText = $this->extractDocxText($file);
                        break;

                    case 'ppt':
                    case 'pptx':
                        $extractedText = $this->extractPptText($file);
                        break;

                    case 'txt':
                        $extractedText = file_get_contents($file->getRealPath());
                        break;
                }

                $extractedText = trim($extractedText);

                if (empty($extractedText)) {
                    return redirect()->back()
                        ->withInput()
                        ->withErrors(['file' => 'The uploaded file contains no readable text. Please upload a file with text content.']);
                }
            } catch (\Exception $e) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['file' => 'Error reading file: ' . $e->getMessage()]);
            }
        } elseif ($request->filled('prompt')) {
            $extractedText = $request->input('prompt');
        } else {
            return redirect()->back()
                ->withInput()
                ->withErrors(['general' => 'Please upload a file or enter a prompt.']);
        }

        // Generate quiz using Gemini
        try {
            $quiz = $this->generateQuizWithGemini($extractedText, $quizType);

            if (empty($quiz)) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['general' => 'Failed to generate quiz. Please try again.']);
            }

            // Store quiz in session for display
            session([
                'current_quiz' => $quiz,
                'quiz_type' => $quizType,
                'quiz_title' => 'Quiz on ' . ucfirst($quizType) . ' - ' . date('M d, Y')
            ]);
            session()->forget(['quiz_results', 'correct_count']); // Clear old results

            return redirect()->route('quiz.show');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['general' => 'Error generating quiz: ' . $e->getMessage()]);
        }
    }

    private function generateQuizWithGemini($text, $quizType)
    {
        $apiKey = env('OPENROUTER_API_KEY', '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');

        if (!$apiKey) {
            throw new \Exception('OpenRouter API key not configured');
        }

        $prompts = [
            'multiple-choice' => "Based on the following content, generate exactly 1 multiple-choice question in a JSON array with 4 options.

            [
            {
                \"question\": \"Question text\",
                \"options\": [\"Option A\", \"Option B\", \"Option C\", \"Option D\"],
                \"correct_answer\": \"Option A\"
            }
            ]

            Content: {$text}

            Return ONLY the JSON array.",

            'true-false' => "Based on the following content, generate exactly 1 true/false question in a JSON array.

            [{\"question\": \"Statement\", \"correct_answer\": \"True\"}]

            Content: {$text}

            Return ONLY the JSON array.",

            'identification' => "Based on the following content, generate exactly 1 identification question in a JSON array.

            [{\"question\": \"Question\", \"correct_answer\": \"Answer\"}]

            Content: {$text}

            Return ONLY the JSON array.",

            'fill-blank' => "Based on the following content, generate exactly 1 fill-in-the-blank question in a JSON array. Use ___ for blank.

            [{\"question\": \"Statement with ___\", \"correct_answer\": \"Answer\"}]

            Content: {$text}

            Return ONLY the JSON array."
        ];

        $prompt = $prompts[$quizType] ?? $prompts['multiple-choice'];

        $response = Http::timeout(120)->withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $apiKey,
            'HTTP-Referer' => url('/'),
            'X-Title' => 'Studee Quiz Maker'
        ])->post('https://openrouter.ai/api/v1/chat/completions', [
            'model' => 'minimax/minimax-m2.1',
            'max_tokens' => 2000,
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'You are a helpful assistant that ONLY outputs valid JSON. Never add explanations or extra text.'
                ],
                [
                    'role' => 'user',
                    'content' => $prompt
                ]
            ]
        ]);

        if (!$response->successful()) {
            throw new \Exception('OpenRouter API request failed: ' . $response->body());
        }

        $responseData = $response->json();
        $responseText = $responseData['choices'][0]['message']['content'] ?? '';

        if (empty($responseText)) {
            throw new \Exception('Empty response from OpenRouter API');
        }

        // Clean markdown formatting
        $responseText = preg_replace('/```json\s*|\s*```/', '', $responseText);
        $responseText = preg_replace('/```\s*|\s*```/', '', $responseText);
        $responseText = trim($responseText);

        // Find the first complete JSON array
        if (preg_match('/\[[\s\S]*?\{[\s\S]*?\}[\s\S]*?\]/', $responseText, $matches)) {
            $responseText = $matches[0];
        }

        $quiz = json_decode($responseText, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception('Invalid JSON response: ' . json_last_error_msg() . ' | Response: ' . substr($responseText, 0, 500));
        }

        return $quiz;
    }

    public function show(Request $request)
    {
        $quiz = session('current_quiz');
        $quizType = session('quiz_type');

        if (!$quiz) {
            return redirect()->route('home')->withErrors(['general' => 'No quiz found. Please generate a quiz first.']);
        }

        // Clear results if retaking
        if ($request->has('retake')) {
            session()->forget(['quiz_results', 'correct_count']);
        }

        return view('quiz', compact('quiz', 'quizType'));
    }
    private function extractPdfText($file)
    {
        $parser = new PdfParser();
        $pdf = $parser->parseFile($file->getRealPath());
        $text = $pdf->getText();

        return $text;
    }

    private function extractDocxText($file)
    {
        $phpWord = IOFactory::load($file->getRealPath());
        $text = '';

        foreach ($phpWord->getSections() as $section) {
            foreach ($section->getElements() as $element) {
                if (method_exists($element, 'getText')) {
                    $text .= $element->getText() . "\n";
                } elseif (method_exists($element, 'getElements')) {
                    foreach ($element->getElements() as $childElement) {
                        if (method_exists($childElement, 'getText')) {
                            $text .= $childElement->getText() . "\n";
                        }
                    }
                }
            }
        }

        return $text;
    }

    private function extractPptText($file)
    {
        $presentation = PresentationIOFactory::load($file->getRealPath());
        $text = '';

        foreach ($presentation->getAllSlides() as $slide) {
            foreach ($slide->getShapeCollection() as $shape) {
                if (method_exists($shape, 'getText')) {
                    $text .= $shape->getText() . "\n";
                }
            }
        }

        return $text;
    }

    public function submit(Request $request)
    {
        $quiz = session('current_quiz');
        $quizType = session('quiz_type');

        if (!$quiz) {
            return redirect()->route('home')->withErrors(['general' => 'No quiz found.']);
        }

        $results = [];
        $correctCount = 0;

        foreach ($quiz as $index => $question) {
            $userAnswer = $request->input("question_{$index}");
            $correctAnswer = $question['correct_answer'];
            $isCorrect = strtolower(trim($userAnswer)) === strtolower(trim($correctAnswer));

            if ($isCorrect) {
                $correctCount++;
            }

            $results[] = [
                'question' => $question,
                'user_answer' => $userAnswer,
                'is_correct' => $isCorrect
            ];
        }

        session(['quiz_results' => $results, 'correct_count' => $correctCount]);

        return redirect()->route('quiz.show');
    }
}
