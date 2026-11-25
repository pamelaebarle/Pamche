<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
