<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/help', function() {
    return view('help');
});

Route::get('/register', function() {
    return view('register');
});