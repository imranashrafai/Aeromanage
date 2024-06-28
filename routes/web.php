<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\showRecord;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', function () {
    return view('Home');
})->name('/');

//============================Logout============================
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//============================Login Routes============================
Route::post('/login', [UserController::class, 'loginUsers'])->name('login');
Route::get('/login', [UserController::class, 'loginView'])->name('loginview');

//============================Register Views============================
Route::get('/register', [UserController::class, 'registerView'])->name('register.view');
Route::post('/register', [UserController::class, 'register'])->name('register');



Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile.setting');
});
Route::post('/profile/image/update', [ProfileController::class, 'updateImageModal'])->name('profile.image.update');
Route::get('/profile/image/remove', [ProfileController::class, 'removeImageModal'])->name('profile.image.remove');


//============================SuperAdmin Middleware============================
Route::middleware(['auth', 'role:super-admin'])->group(function () {
    Route::post('admin/addPassenger', [PassengerController::class, 'addPassenger'])->name('pas');
    Route::get('admin/addPassenger', [PassengerController::class, 'viewAddPassenger']);
    Route::get('/showrecord', [showRecord::class, 'showrecord']);
    Route::post('/booking', [BookingController::class, 'booking'])->name('bookings');
});

//============================Admin Middleware============================
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');
    Route::post('admin/addPassenger', [PassengerController::class, 'addPassenger'])->name('pas');
    Route::get('admin/addPassenger', [PassengerController::class, 'viewAddPassenger']);
    Route::get('/showrecord', [showRecord::class, 'showrecord']);
    Route::post('/booking', [BookingController::class, 'booking'])->name('bookings');
});

//============================Email Verification============================

// Email Verification Notification
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');
});

// Email Verification Handler
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

//Resend Verfication Trigger
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
