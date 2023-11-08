<?php

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

Route::get('/', function () {
    return view('home.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/books', [App\Http\Controllers\HomeController::class, 'book'])->name('home.book');
Route::get('/book/upload', [App\Http\Controllers\AdminController::class, 'home']);
Route::post('/book/store', [App\Http\Controllers\BookController::class, 'store'])->name('book.store');
Route::get('/book/loop', [App\Http\Controllers\HomeController::class, 'loop']);
