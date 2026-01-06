<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemini API Test</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            padding: 40px;
            max-width: 600px;
            width: 100%;
        }
        
        h1 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            font-size: 28px;
        }
        
        .input-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
            font-size: 14px;
        }
        
        input, textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            transition: border-color 0.3s;
        }
        
        input:focus, textarea:focus {
            outline: none;
            border-color: #667eea;
        }
        
        textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
        }
        
        button:active {
            transform: translateY(0);
        }
        
        button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        
        .output-section {
            margin-top: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
            display: none;
        }
        
        .output-section.show {
            display: block;
        }
        
        .output-title {
            color: #333;
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 16px;
        }
        
        .output-content {
            color: #555;
            line-height: 1.6;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        
        .error {
            background: #fee;
            border-left: 4px solid #f44;
            color: #c33;
        }
        
        .success {
            background: #efe;
            border-left: 4px solid #4c4;
        }
        
        .loading {
            text-align: center;
            color: #667eea;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🤖 OpenRouter API Test</h1>
        
        <div class="input-group">
            <label for="apiKey">OpenRouter API Key</label>
            <input type="password" id="apiKey" placeholder="Enter your OpenRouter API key" value="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">
        </div>
        
        <div class="input-group">
            <label for="prompt">Your Prompt</label>
            <textarea id="prompt" placeholder="Type your question or prompt here..."></textarea>
        </div>
        
        <button id="testBtn" onclick="testGemini()">Test OpenRouter API</button>
        
        <div class="output-section" id="output">
            <div class="output-title">Response:</div>
            <div class="output-content" id="outputContent"></div>
        </div>
    </div>

    <script>
        async function testGemini() {
            const apiKey = document.getElementById('apiKey').value.trim();
            const prompt = document.getElementById('prompt').value.trim();
            const outputSection = document.getElementById('output');
            const outputContent = document.getElementById('outputContent');
            const testBtn = document.getElementById('testBtn');
            
            // Validation
            if (!apiKey) {
                alert('Please enter your API key');
                return;
            }
            
            if (!prompt) {
                alert('Please enter a prompt');
                return;
            }
            
            // Show loading
            testBtn.disabled = true;
            testBtn.textContent = 'Testing...';
            outputSection.className = 'output-section show';
            outputContent.className = 'output-content loading';
            outputContent.textContent = 'Waiting for response...';
            
            try {
                const response = await fetch('https://openrouter.ai/api/v1/chat/completions', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${apiKey}`,
                        'HTTP-Referer': window.location.href,
                        'X-Title': 'Quiz Test Page'
                    },
                    body: JSON.stringify({
                        model: 'meta-llama/llama-3.2-3b-instruct:free',
                        messages: [{
                            role: 'user',
                            content: prompt
                        }]
                    })
                });
                
                const data = await response.json();
                
                if (!response.ok) {
                    throw new Error(JSON.stringify(data, null, 2));
                }
                
                // Success
                const text = data.choices[0].message.content;
                outputContent.className = 'output-content success';
                outputContent.textContent = text;
                
            } catch (error) {
                // Error
                outputContent.className = 'output-content error';
                outputContent.textContent = 'Error: ' + error.message;
            } finally {
                testBtn.disabled = false;
                testBtn.textContent = 'Test OpenRouter API';
            }
        }
        
        // Allow Enter to submit (with Shift+Enter for new line)
        document.getElementById('prompt').addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                testGemini();
            }
        });
    </script>
</body>
</html>