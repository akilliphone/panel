<?php

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', function() {
        return view('welcome');
    })->name('home');
});
