<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;


Route::get('/', function () {
    return view('home');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/', [ShopController::class, 'home'])->name('home');

// Route for Shop Page
Route::get('/shop', [ShopController::class, 'index'])->name('shop');

