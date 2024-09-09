<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/books', [BookController::class, 'books'])->name('books');
Route::get('/books/{id}', [BookController::class, 'bookDetails'])->name('book.details');

Route::get('/contact', function () {
    return view('contact');})->name('contact');

Route::get('/about', function () {
    return view('about');})->name('about');
