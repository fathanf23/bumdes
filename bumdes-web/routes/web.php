<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route untuk halaman utama (Home)
Route::get('/', function () {
    return view('home');
});

// Route untuk halaman Catering
Route::get('/catering', function () {
    return view('catering');
})->name('catering');

// Route untuk halaman Playground
Route::get('/playground', function () {
    return view('playground');
});

// Route untuk halaman All Product
Route::get('/all-product', function () {
    return view('all-product');
});

Route::get('/catering', [FrontController::class, 'catering']);

Route::get('/frontend/beranda/', [FrontController::class, 'beranda']);

Route::get('/frontend/beranda/', [FrontController::class, 'beranda'])->name('beranda');


// Admin
Route::get('/admin/dashboard/', [DashboardController::class, 'index'])->name('admin');

// Admin Produk
Route::get('/admin/produk/index', [ProdukController::class, 'index']);
Route::get('/admin/produk/create', [ProdukController::class, 'create']);
Route::post('/admin/produk/store', [ProdukController::class, 'store']);
Route::get('/admin/produk/destroy/{id}', [ProdukController::class, 'destroy']);
Route::get('/admin/produk/edit/{id}', [ProdukController::class, 'edit']);
Route::post('/admin/produk/update/{id}', [ProdukController::class, 'post']);


// Admin Transaksi
Route::get('/admin/transaksi/index', [TransaksiController::class, 'index']);
Route::get('/admin/transaksi/create', [TransaksiController::class, 'create']);
Route::post('/admin/transaksi/store', [TransaksiController::class, 'store']);
