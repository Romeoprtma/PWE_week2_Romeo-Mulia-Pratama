<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//Home Controller
Route::get('/', [HomeController::class, 'index']);

//Product Controller
Route::resource('produk', ProductController::class);
Route::get('/produk/{kode_produk}/edit', [ProductController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{kode_produk}', [ProductController::class, 'update'])->name('produk.update');
Route::delete('/produk/{kode_produk}', [ProductController::class, 'destroy'])->name('produk.destroy');

Route::get('/inputProduk', [ProductController::class, 'create']);
Route::get('/laporan', [ProductController::class, 'ViewLaporan']);
Route::get('/report', [ProductController::class, 'print']);


