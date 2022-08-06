<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function() {
    Route::get('/panel', function() {
        return view('dashboard.index');
    })->name('home');
    Route::get('/usersTable', [UserController::class, 'getData'])->name('user.table');
    Route::get('/users', function () {
        return view('dashboard.user');
    })->name('users');
});
