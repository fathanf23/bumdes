<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('frontend/beranda');
});

// Route Halaman Utama
Route::get('/catering', [FrontController::class, 'catering'])->name('catering');
Route::get('/playground', [FrontController::class, 'playground'])->name('playground');
Route::get('/all-product', function () {
    return view('all-product');
});

Route::get('/catering', [FrontController::class, 'catering'])->name('catering');

// Route Beranda
Route::get('/frontend/beranda/', [FrontController::class, 'beranda'])->name('beranda');

// Admin Dashboard
Route::get('/admin/dashboard/', [DashboardController::class, 'index'])->name('admin');

// Admin Produk
Route::prefix('admin/produk')->group(function () {
    Route::get('/index', [ProdukController::class, 'index']);
    Route::get('/create', [ProdukController::class, 'create']);
    Route::post('/store', [ProdukController::class, 'store']);
    Route::get('/destroy/{id}', [ProdukController::class, 'destroy']);
    Route::get('/edit/{id}', [ProdukController::class, 'edit']);
    Route::post('/update/{id}', [ProdukController::class, 'post']);
});

// Admin Transaksi
Route::prefix('admin/transaksi')->group(function () {
    Route::get('/index', [TransaksiController::class, 'index']);
    Route::get('/create', [TransaksiController::class, 'create']);
    Route::post('/store', [TransaksiController::class, 'store']);
});
