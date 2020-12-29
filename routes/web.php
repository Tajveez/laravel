<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts.index');
});

Route::get('/posts', function () {
    return view('posts.index');
});
