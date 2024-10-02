<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('component.home');
});

Route::get('/', [HomeController::class, 'index']);
Route::resource('produk', ProductController::class);

Route::get('/inputProduk', function () {
    return view('component.inputProduk');
});

