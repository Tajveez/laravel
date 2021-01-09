<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterController::class, 'Index'])->name('register');
Route::post('/register', [RegisterController::class, 'Store']);

Route::get('/', function () {
    return view('posts.index');
});

Route::get('/posts', function () {
    return view('posts.index');
});
