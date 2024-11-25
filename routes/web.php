<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend_pages.home');
});

Route::get('/home', function () {
    return view('frontend_pages.home');
});
Route::get('/home', function () { return view('frontend_pages.home');});
Route::get('/portfolio', function () { return view('frontend_pages.portfolio');});
Route::get('/about', function () { return view('frontend_pages.about');});
Route::get('/blog-single', function () { return view('frontend_pages.blog-single');});
Route::get('/blog-home', function () { return view('frontend_pages.blog-home');});
Route::get('/portfolio-details', function () { return view('frontend_pages.portfolio-details');});
Route::get('/elements', function () { return view('frontend_pages.elements');});
Route::get('/contact', function () { return view('frontend_pages.contact');});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
