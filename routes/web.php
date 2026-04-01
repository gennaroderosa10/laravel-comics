<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/characters', function () {
    return view('characters');
})->name("characters");

Route::get('/comics', function () {
    return view('comics');
})->name("comics");

Route::get('/movies', function () {
    return view('movies');
})->name("movies");

Route::get('/shop', function () {
    return view('shop');
})->name("shop");

Route::get('/about', function () {
    return view('about');
})->name("about");
