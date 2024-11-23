<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/home', \App\Http\Controllers\HomeController::class);

/**
 * route resource /posts
 */
Route::resource('/posts', \App\Http\Controllers\PostController::class);