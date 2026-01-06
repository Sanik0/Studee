<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::post('/quiz/generate', [QuizController::class, 'generate'])->name('quiz.generate');
Route::get('/quiz', [QuizController::class, 'show'])->name('quiz.show');
Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');

Route::get('/text', function () {
    return view('text');
})->name('text');