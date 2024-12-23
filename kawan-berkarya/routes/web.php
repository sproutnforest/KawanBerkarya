<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/help', function() {
    return view('help');
});

Route::get('/register', function() {
    return view('register');
});

Route::get('/store-data', [DataController::class, 'storeData']);
Route::get('/', [DataController::class, 'displayData']);
Route::get('/explore', [DataController::class, 'displayDataExplore']);