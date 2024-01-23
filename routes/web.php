<?php

use App\Http\Controllers\AuthController;
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
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::view('/books', 'books', ['title' => 'Bumi Manusia',]);
Route::view('/users/adamfebrian', 'user');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authentication');
