<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'index');
Route::view('/books/bumi-manusia', 'show', [
    'id' => 1,
    'reviewer' => 'adamfebrian',
    'review_body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quos. Omnis,
    minus quas? Vero, non rerum quasi ipsum repudiandae ad, soluta magnam reiciendis omnis, corrupti
    neque maiores officiis voluptates accusantium?',
    'date_published' => 'February 21, 2006'
]);

Route::view('/users/adamfebrian', 'user');

Route::middleware('auth')->group(function () {
    Route::view('/books', 'books', [
        'title' => 'Bumi kita',
        'judul_halaman' => 'Books',
    ]);
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout.perform');
    Route::view('/trending', 'trending', [
        'judul_halaman' => 'Trending',
    ]);
});

Route::middleware('guest')->group(function () {
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');
    Route::get('/register', [RegisterController::class, 'show'])->name('register.show');

    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.perform');
});

Route::resource('test', TestController::class);
