<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'Index'])->name('dashboard');
Route::get('/users/{user:username}/posts', [UserPostController::class, 'Index'])->name('user.posts');
Route::post('/logout', [LogoutController::class, 'Logout'])->name('logout');

Route::get('/login', [LoginController::class, 'Index'])->name('login');
Route::post('/login', [LoginController::class, 'Store']);

Route::get('/register', [RegisterController::class, 'Index'])->name('register');
Route::post('/register', [RegisterController::class, 'Store']);

Route::get('/posts', [PostController::class, 'Index'])->name('posts');
Route::post('/posts', [PostController::class, 'Store']);
Route::delete('/posts/{post}', [PostController::class, 'Destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes', [PostLikeController::class, 'Store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');

Route::get('/home', function () {
    return redirect()->route('home');
});

Route::get('/', function () {
    return view('home');
})->name('home');
