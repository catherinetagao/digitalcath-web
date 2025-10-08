<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Models\Feedback;

Route::get('/', function () {
    $feedbacks = Feedback::latest()->take(5)->get();
    return view('welcome', compact('feedbacks'));
});

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

// Route::get('/', function () {
//     return view('home');
// });

// //Routes for additional pages

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });