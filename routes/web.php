<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\Authenticated;
use App\Livewire\Authenticated as LivewireAuthenticated;
use App\Livewire\Book;
use App\Livewire\AddBook;
use App\Livewire\DeleteBook;
use App\Livewire\EditBook;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;



// Halaman utama → resources/views/depan/index.blade.php
Route::get('/', function () {
    return view('depan.index');
})->name('home');

// Halaman login manual → resources/views/login/in.blade.php
Route::get('/login-page', function () {
    return view('login.in');
})->name('login.page');

// Login pakai LoginController
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/redirect', [LoginController::class, 'redirect'])->name('redirect');
Route::get('/unauthorized', [LoginController::class, 'unauthorized'])->name('unauthorized');

// Route yang pakai middleware
Route::middleware(Authenticated::class)->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('book')->name('book.')->group(function () {
        Route::get('/', Book::class)->name('list');
        Route::get('/create', AddBook::class)->name('add');
        Route::get('/delete/{book}', DeleteBook::class)->name('delete');
        Route::get('/{book}', EditBook::class)->name('edit');
    });
});