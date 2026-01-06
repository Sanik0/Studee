<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('index'); // your main form page
})->name('home');

Route::post('/quiz/generate', [QuizController::class, 'generate'])->name('quiz.generate');
Route::get('/quiz', [QuizController::class, 'show'])->name('quiz.show');
Route::get('/quiz', function () {
    return view('quiz');
});

