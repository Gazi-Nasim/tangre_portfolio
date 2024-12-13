<?php

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BrandingController;
use App\Http\Controllers\Backend\ExclusiveController;
use App\Http\Controllers\Backend\EXteriorController;
use App\Http\Controllers\Backend\GeneralInfoController;
use App\Http\Controllers\Backend\InteriorController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::name('frontend.')->controller(FrontendController::class)->group(function () {
    Route::get('/exclusive', 'getExclusive')->name('getExclusive');
    Route::get('/portfolio', 'getService')->name('getPortfolio');
    Route::get('/interior', 'getInterior')->name('getInterior');
    Route::get('/exterior', 'getExterior')->name('getExterior');
    Route::get('/branding', 'getBranding')->name('getBranding');
    Route::get('/services', 'getService')->name('getService');
    Route::get('/contact', 'getContact')->name('getContact');
    Route::get('/about', 'getAbout')->name('getAbout');
    Route::get('/', 'getHome')->name('getHome');
});



Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::resource('exclusive', ExclusiveController::class)->names('exclusive');
    Route::resource('interior', InteriorController::class)->names('interior');
    Route::resource('exterior', EXteriorController::class)->names('exterior');
    Route::resource('branding', BrandingController::class)->names('branding');
    Route::resource('message', MessageController::class)->names('message');
    Route::resource('users', UserController::class)->names('user');
    Route::resource('team', TeamController::class)->names('team');
    Route::resource('home', GeneralInfoController::class)->names('home');
});
require __DIR__ . '/auth.php';
