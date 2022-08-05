<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

// Return login form.
Route::get('/giris', function() {
    return view('auth.login');
})->name('login');

// Posts login and checks if user is valid.
Route::post('/girisPost', [AuthController::class, 'login'])->name('login.post');

// Returns registration form.
Route::get('/kayit-ol', function() {
    return view('auth.register');
})->name('register');

// Posts registration form, creates a user and logins user.
Route::post('/kayit-olPost', [AuthController::class, 'register'])->name('register.post');

Route::get('cikis', [AuthController::class, 'logout'])->name('logout');
