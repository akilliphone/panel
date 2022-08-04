<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->name('home')->middleware('auth');

Route::get('/login', function() {
    return view('auth.login');
})->name('login');
Route::post('/loginPost', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', function() {
    return view('auth.register');
})->name('register');
Route::post('/registerPost', [AuthController::class, 'register'])->name('register.post');
