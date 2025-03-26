<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SearchController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Rute untuk halaman home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk halaman dan crud produk
Route::resource('product', ProductController::class);

// Rute untuk halaman about
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Rute untuk halaman pencarian produk
Route::get('/search', [SearchController::class, 'index'])->name('product.search');
