<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products/create', [DashboardController::class, 'create'])->name('products.create');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/products', [DashboardController::class, 'store'])->name('products.store');
Route::put('/products/{id}', [DashboardController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [DashboardController::class, 'destroy'])->name('products.destroy');
Route::post('/logout', function () {
return redirect('/welcome'); 
})->name('logout');
Route::get('/produk', [DashboardController::class, 'index'])->name('products.index');
Route::get('/products/{id}/edit', [DashboardController::class, 'edit'])->name('products.edit');


Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');

Route::get('/informasi/create', [InformasiController::class, 'create'])->name('informasi.create');
Route::post('/informasi', [InformasiController::class, 'store'])->name('informasi.store');
Route::get('/informasi/{id}/edit', [InformasiController::class, 'edit'])->name('informasi.edit');
Route::put('/informasi/{id}', [InformasiController::class, 'update'])->name('informasi.update');
Route::delete('/informasi/{id}', [InformasiController::class, 'destroy'])->name('informasi.destroy');

