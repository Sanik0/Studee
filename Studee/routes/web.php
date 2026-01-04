<?php

use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', [QuizController::class, 'index'])->name('quiz.index');
Route::post('/extract-text', [QuizController::class, 'extractText'])->name('quiz.extract');
Route::get('/preview', [QuizController::class, 'preview'])->name('quiz.preview');

Route::get('/quiz', function () {
    return view('quiz');
});

