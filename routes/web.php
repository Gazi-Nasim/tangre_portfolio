<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
Route::get('/interior', function () { return view('frontend_pages.interior');});
Route::get('/contact', function () { return view('frontend_pages.contact');});

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

    Route::group(['prefix' => 'roles'], function () {
        Route::resource('roles', RolesController::class)->names('role');
    });

    Route::group(['prefix' => 'branch'], function () {
        Route::resource('branch', BrancheController::class)->names('branch');
    });

    Route::group(['prefix' => 'branch-message'], function () {
        Route::resource('branch-message', BranchmessageController::class)->names('branch_message');
    });

    Route::group(['prefix' => 'branch-slider'], function () {
        Route::resource('branchslider', BranchsliderController::class)->names('branchslider');
    });

    Route::group(['prefix' => 'facility'], function () {
        Route::resource('facility', FacilitieController::class)->names('facility');
    });

    Route::group(['prefix' => 'main-address'], function () {
        Route::resource('main-address', Main_addresController::class)->names('main_address');
    });

    Route::group(['prefix' => 'main-sliders'], function () {
        Route::resource('main-sliders', Main_sliderController::class)->names('main_slider');
    });

    Route::group(['prefix' => 'offers'], function () {
        Route::resource('offers', OfferController::class)->names('offer');
    });

    Route::group(['prefix' => 'room'], function () {
        Route::resource('room', RoomController::class)->names('room');
    });

    Route::group(['prefix' => 'room-photo'], function () {
        Route::resource('room-photo', RoomphotoController::class)->names('room_photo');
    });

    Route::group(['prefix' => 'general'], function () {
        Route::resource('general', GeneralinfoController::class)->names('general');
    });

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});
require __DIR__ . '/auth.php';
