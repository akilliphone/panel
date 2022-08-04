<?php

use App\Http\Controllers\Auth\AuthController;

// Return login form.
Route::get('/login', function() {
    return view('auth.login');
})->name('login');

// Posts login and checks if user is valid.
Route::post('/loginPost', [AuthController::class, 'login'])->name('login.post');

// Returns registration form.
Route::get('/register', function() {
    return view('auth.register');
})->name('register');

// Posts registration form, creates a user and logins user.
Route::post('/registerPost', [AuthController::class, 'register'])->name('register.post');
