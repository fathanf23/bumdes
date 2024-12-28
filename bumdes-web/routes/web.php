<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/admin/dashboard/', [DashboardController::class, 'index'])->name('admin');

