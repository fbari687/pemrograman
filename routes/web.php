<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/books/{book}', [PageController::class, 'book']);

// Login
Route::prefix('/login')->middleware('guest')->group(function () {
    Route::get('/', [PageController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'login']);
});

// logout
Route::get('/logout', [AuthController::class, 'logout']);

// Admin & Pustakawan
Route::prefix('/dashboard')->middleware(['auth:admin'])->group(function () {
    Route::get('/', [PageController::class, 'dashboard']);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/books', BookController::class);
});
// Route::get('/dashboard/books')
