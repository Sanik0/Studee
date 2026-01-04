<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Maker - Extracted Text Preview</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-8">
    <div class="max-w-4xl mx-auto">
        <div class="mb-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Extracted Text Preview</h1>
            <a href="{{ route('quiz.index') }}" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-medium text-sm">
                <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
                Upload Another File
            </a>
        </div>

        @if($fileName)
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-4 mb-4">
                <p class="text-sm text-gray-600">File Name:</p>
                <p class="font-semibold text-gray-800">{{ $fileName }}</p>
            </div>
        @endif

        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
            <div class="mb-4 flex justify-between items-center">
                <h2 class="text-lg font-semibold text-gray-800">Extracted Content</h2>
                <div class="flex gap-2">
                    <button onclick="copyToClipboard()" class="inline-flex items-center text-sm text-purple-600 hover:text-purple-700 font-medium">
                        <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M9 8v3a1 1 0 0 1-1 1H5m11 4h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-7a1 1 0 0 0-1 1v1m4 3v10a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-7.13a1 1 0 0 1 .24-.65L7.7 8.35A1 1 0 0 1 8.46 8H13a1 1 0 0 1 1 1Z"/>
                        </svg>
                        Copy Text
                    </button>
                    <span id="copy-feedback" class="text-sm text-green-600 font-medium hidden">Copied!</span>
                </div>
            </div>

            @if($extractedText)
                <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                    <div class="mb-3 text-sm text-gray-600">
                        <span class="font-semibold">Word Count:</span> {{ str_word_count($extractedText) }} words
                        <span class="mx-2">|</span>
                        <span class="font-semibold">Character Count:</span> {{ strlen($extractedText) }} characters
                    </div>
                    <div id="extracted-text" class="text-gray-800 whitespace-pre-wrap leading-relaxed max-h-[600px] overflow-y-auto">{{ $extractedText }}</div>
                </div>

                <!-- Next Steps Section -->
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Next Steps</h3>
                    <p class="text-sm text-gray-600 mb-4">Use this extracted text to generate quiz questions with AI</p>
                    <button class="inline-flex items-center text-white bg-purple-600 hover:bg-purple-700 border border-transparent focus:ring-4 focus:ring-purple-300 shadow-sm font-medium rounded-lg text-sm px-4 py-2.5 focus:outline-none">
                        Generate Quiz with AI
                        <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </button>
                </div>
            @else
                <div class="text-center py-8 text-gray-500">
                    <p>No text was extracted. Please try uploading a different file.</p>
                </div>
            @endif
        </div>
    </div>

    <script>
        function copyToClipboard() {
            const text = document.getElementById('extracted-text').textContent;
            navigator.clipboard.writeText(text).then(() => {
                const feedback = document.getElementById('copy-feedback');
                feedback.classList.remove('hidden');
                setTimeout(() => {
                    feedback.classList.add('hidden');
                }, 2000);
            });
        }
    </script>
</body>
</html>