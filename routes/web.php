<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'Index'])->name('dashboard');
Route::get('/login', [LoginController::class, 'Index'])->name('login');
Route::get('/register', [RegisterController::class, 'Index'])->name('register');
Route::post('/register', [RegisterController::class, 'Store']);

Route::get('/', function () {
    return view('posts.index');
});

Route::get('/posts', function () {
    return view('posts.index');
});
