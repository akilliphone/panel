<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

// Only if user is not logged in
Route::middleware(['guest'])->group(function () {
    // Return login form.
    Route::get('/giris-yap', function() {
        return view('auth.login');
    })->name('login');

    // Posts login and checks if user is valid.
    Route::post('/giris-yap', [AuthController::class, 'login'])->name('login.post');

    // Returns registration form.
    Route::get('/kayit-ol', function() {
        return view('auth.register');
    })->name('register');

    // Posts registration form, creates a user and logins user.
    Route::post('/kayit-ol', [AuthController::class, 'register'])->name('register.post');
});

// Only if user logged in
Route::middleware(['auth'])->group(function () {
    // Logs user out.
    Route::get('cikis-yap', [AuthController::class, 'logout'])->name('logout');
});

