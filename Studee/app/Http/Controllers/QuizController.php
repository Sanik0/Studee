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
            session(['current_quiz' => $quiz, 'quiz_type' => $quizType]);

            return redirect()->route('quiz.show');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['general' => 'Error generating quiz: ' . $e->getMessage()]);
        }
    }

    private function generateQuizWithGemini($text, $quizType)
    {
        $apiKey = env('GEMINI_API_KEY');

        if (!$apiKey) {
            throw new \Exception('Gemini API key not configured');
        }

        $prompts = [
            'multiple-choice' => "Based on the following content, generate exactly 20 multiple-choice questions. Each question should have 4 options and indicate the correct answer. Format your response as a JSON array with this structure:
[
  {
    \"question\": \"Question text here\",
    \"options\": [\"Option A\", \"Option B\", \"Option C\", \"Option D\"],
    \"correct_answer\": \"Option A\"
  }
]

Content: {$text}

Respond ONLY with valid JSON, no additional text or formatting.",

            'true-false' => "Based on the following content, generate exactly 20 true or false questions. Format your response as a JSON array with this structure:
[
  {
    \"question\": \"Statement here\",
    \"correct_answer\": \"True\"
  }
]

Content: {$text}

Respond ONLY with valid JSON, no additional text or formatting.",

            'identification' => "Based on the following content, generate exactly 20 identification questions where the answer is a single term, name, or short phrase. Format your response as a JSON array with this structure:
[
  {
    \"question\": \"Question text here\",
    \"correct_answer\": \"The answer\"
  }
]

Content: {$text}

Respond ONLY with valid JSON, no additional text or formatting.",

            'fill-blank' => "Based on the following content, generate exactly 20 fill-in-the-blank questions. Use ___ to indicate where the blank should be. Format your response as a JSON array with this structure:
[
  {
    \"question\": \"Statement with ___ indicating the blank\",
    \"correct_answer\": \"The word/phrase that fills the blank\"
  }
]

Content: {$text}

Respond ONLY with valid JSON, no additional text or formatting."
        ];

        $prompt = $prompts[$quizType] ?? $prompts['multiple-choice'];

        // Use the v1 API with gemini-1.5-flash (fastest and most reliable)
        // Replace this line in generateQuizWithGemini:
        $response = Http::timeout(60)->withHeaders([
            'Content-Type' => 'application/json',
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key={$apiKey}", [
            'contents' => [
                [
                    'parts' => [
                        ['text' => $prompt]
                    ]
                ]
            ],
            'generationConfig' => [
                'temperature' => 0.7,
                'topK' => 40,
                'topP' => 0.95,
                'maxOutputTokens' => 8192,
            ]
        ]);

        if (!$response->successful()) {
            throw new \Exception('Gemini API request failed: ' . $response->body());
        }

        $responseData = $response->json();

        // Extract text from Gemini response
        $responseText = $responseData['candidates'][0]['content']['parts'][0]['text'] ?? '';

        if (empty($responseText)) {
            throw new \Exception('Empty response from Gemini API');
        }

        // Clean response - remove markdown code blocks if present
        $responseText = preg_replace('/```json\s*|\s*```/', '', $responseText);
        $responseText = trim($responseText);

        // Parse JSON response
        $quiz = json_decode($responseText, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception('Invalid JSON response from Gemini API: ' . json_last_error_msg());
        }

        return $quiz;
    }

    public function show()
    {
        $quiz = session('current_quiz');
        $quizType = session('quiz_type');

        if (!$quiz) {
            return redirect()->route('home')->withErrors(['general' => 'No quiz found. Please generate a quiz first.']);
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
}
