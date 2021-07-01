<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts','PostController');
Route::resource('pages','PageController');
Route::resource('images','ImageController');
