# Studee 🎓

An AI-powered, databaseless quiz generator that transforms your study materials into interactive quizzes in seconds. Upload documents or enter prompts, and let AI create personalized quizzes to enhance your learning experience.

![Studee Banner](path/to/banner-image.png) <!-- Add a screenshot of your app -->

## ✨ Features

- **📄 Multi-Format Support**: Upload PDF, DOCX, PPT, PPTX, or TXT files
- **🤖 AI-Powered Generation**: Leverages OpenRouter AI to create intelligent quiz questions
- **🎯 Multiple Quiz Types**: 
  - Multiple Choice
  - True or False
  - Identification
  - Fill in the Blank
- **💬 Prompt-Based Generation**: Create quizzes from custom text prompts
- **⚡ No Database Required**: Lightweight, session-based storage
- **📱 Responsive Design**: Works seamlessly on desktop and mobile devices
- **🎨 Modern UI**: Beautiful, accessible interface with smooth animations

## 🛠️ Technologies Used

### Backend
- **[Laravel](https://laravel.com/)** - PHP framework for robust backend architecture
- **File Parsers**:
  - [smalot/pdfparser](https://github.com/smalot/pdfparser) - PDF text extraction
  - [PHPOffice/PhpWord](https://github.com/PHPOffice/PHPWord) - DOCX processing
  - [PHPOffice/PhpPresentation](https://github.com/PHPOffice/PhpPresentation) - PPT/PPTX handling

### AI Integration
- **[OpenRouter API](https://openrouter.ai/)** - AI model routing and management
  - Supports multiple models: Llama 3.2, Mistral, Qwen, and more
  - Intelligent quiz question generation
  - JSON-structured responses

### Frontend
- **[Tailwind CSS](https://tailwindcss.com/)** - Utility-first CSS framework
- **[Flowbite](https://flowbite.com/)** - Tailwind component library
- **Custom JavaScript** - Interactive form handling and animations
- **[DotLottie Player](https://github.com/dotlottie/player-component)** - Smooth loading animations

## 📋 Prerequisites

- PHP >= 8.1
- Composer
- Node.js & npm
- OpenRouter API key ([Get one here](https://openrouter.ai/))
