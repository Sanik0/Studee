<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smalot\PdfParser\Parser as PdfParser;
use PhpOffice\PhpWord\IOFactory;

class QuizController extends Controller
{
    public function index()
    {
        return view('index'); // or whatever your index view is called
    }

    public function extractText(Request $request)
    {
        // Validate the file
        $request->validate([
            'file' => 'required|file|mimes:pdf,docx,doc|max:10240', // 10MB max (10240 KB)
        ], [
            'file.required' => 'Please upload a file.',
            'file.file' => 'The uploaded item must be a valid file.',
            'file.mimes' => 'Only PDF, DOCX, and DOC files are allowed.',
            'file.max' => 'The file size must not exceed 10MB.',
        ]);

        $file = $request->file('file');
        
        // Additional server-side check for file size
        $fileSizeInMB = $file->getSize() / 1024 / 1024; // Convert bytes to MB
        if ($fileSizeInMB > 10) {
            return back()
                ->withInput()
                ->with('error', 'The uploaded file is too large (' . number_format($fileSizeInMB, 2) . 'MB). Maximum file size is 10MB.');
        }

        $extension = $file->getClientOriginalExtension();
        $extractedText = '';

        try {
            if ($extension === 'pdf') {
                $extractedText = $this->extractFromPdf($file);
            } elseif (in_array($extension, ['docx', 'doc'])) {
                $extractedText = $this->extractFromDocx($file);
            }

            // Store the extracted text in session for testing
            session(['extracted_text' => $extractedText]);
            session(['file_name' => $file->getClientOriginalName()]);

            return redirect()->route('quiz.preview');
        } catch (\Exception $e) {
            return back()->with('error', 'Error extracting text: ' . $e->getMessage());
        }
    }

    private function extractFromPdf($file)
    {
        try {
            $parser = new PdfParser();
            $pdf = $parser->parseFile($file->getRealPath());
            $text = '';

            // Method 1: Try extracting from all pages individually
            try {
                $pages = $pdf->getPages();
                foreach ($pages as $pageNumber => $page) {
                    try {
                        $pageText = $page->getText();
                        if (!empty(trim($pageText))) {
                            $text .= $pageText . "\n\n";
                        }
                    } catch (\Exception $e) {
                        \Log::warning("Could not extract text from page {$pageNumber}: " . $e->getMessage());
                        continue;
                    }
                }
            } catch (\Exception $e) {
                \Log::warning('Page-by-page extraction failed: ' . $e->getMessage());
            }

            // Method 2: If Method 1 failed or returned empty, try getting all text at once
            if (empty(trim($text))) {
                try {
                    $text = $pdf->getText();
                } catch (\Exception $e) {
                    \Log::warning('Bulk text extraction failed: ' . $e->getMessage());
                }
            }

            // Method 3: Try to get text from document details/metadata
            if (empty(trim($text))) {
                try {
                    $details = $pdf->getDetails();
                    if (isset($details['Subject'])) {
                        $text .= "Subject: " . $details['Subject'] . "\n";
                    }
                    if (isset($details['Keywords'])) {
                        $text .= "Keywords: " . $details['Keywords'] . "\n";
                    }
                } catch (\Exception $e) {
                    \Log::warning('Metadata extraction failed: ' . $e->getMessage());
                }
            }

            // Clean up the text
            if (!empty($text)) {
                // Remove excessive whitespace while preserving paragraph breaks
                $text = preg_replace('/[ \t]+/', ' ', $text);
                $text = preg_replace('/\n{3,}/', "\n\n", $text);
                $text = trim($text);
            }

            // Check if we got any text
            if (empty(trim($text))) {
                \Log::warning('No text could be extracted from PDF. It might be image-based or encrypted.');
                throw new \Exception('This PDF appears to be image-based or contains no extractable text. Please try a text-based PDF or use OCR software to convert it first.');
            }

            \Log::info('PDF extraction successful. Text length: ' . strlen($text));
            return $text;
        } catch (\Exception $e) {
            \Log::error('PDF extraction error: ' . $e->getMessage());
            throw $e;
        }
    }

    private function extractFromDocx($file)
    {
        $phpWord = IOFactory::load($file->getRealPath());
        $text = '';

        foreach ($phpWord->getSections() as $section) {
            $elements = $section->getElements();
            foreach ($elements as $element) {
                if (method_exists($element, 'getText')) {
                    $text .= $element->getText() . "\n";
                } elseif (method_exists($element, 'getElements')) {
                    foreach ($element->getElements() as $childElement) {
                        if (method_exists($childElement, 'getText')) {
                            $text .= $childElement->getText() . ' ';
                        }
                    }
                }
            }
        }

        return trim($text);
    }

    public function preview()
    {
        $extractedText = session('extracted_text', '');
        $fileName = session('file_name', '');

        return view('preview', compact('extractedText', 'fileName'));
    }
}