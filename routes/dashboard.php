<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function() {
    Route::get('/panel', function() {
        return view('dashboard.index');
    })->name('home');
});
