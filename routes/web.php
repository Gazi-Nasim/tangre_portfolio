<?php

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BrandingController;
use App\Http\Controllers\Backend\ExclusiveController;
use App\Http\Controllers\Backend\EXteriorController;
use App\Http\Controllers\Backend\InteriorController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend_pages.home');
});

Route::get('/home', function () { return view('frontend_pages.home');});
Route::get('/services', function () { return view('frontend_pages.portfolio');});
Route::get('/portfolio', function () { return view('frontend_pages.portfolio');});
Route::get('/about', function () { return view('frontend_pages.about');});
Route::get('/contact', function () { return view('frontend_pages.contact');});
Route::get('/interior', function () { return view('frontend_pages.interior');});
Route::get('/exterior', function () { return view('frontend_pages.exterior');});
Route::get('/branding', function () { return view('frontend_pages.branding');});
Route::get('/exclusive', function () { return view('frontend_pages.exclusive');});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'users'], function () {
        Route::resource('users', UserController::class)->names('user');
    });

    Route::group(['prefix' => 'interior'], function () {
        Route::resource('interior', InteriorController::class)->names('interior');
    });

    Route::group(['prefix' => 'exterior'], function () {
        Route::resource('exterior', EXteriorController::class)->names('exterior');
    });

    Route::group(['prefix' => 'branding'], function () {
        Route::resource('branding', BrandingController::class)->names('branding');
    });

    Route::group(['prefix' => 'exclusive'], function () {
        Route::resource('exclusive', ExclusiveController::class)->names('exclusive');
    });

    Route::group(['prefix' => 'message'], function () {
        Route::resource('message', MessageController::class)->names('message');
    });


    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});
require __DIR__ . '/auth.php';
