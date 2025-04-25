<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products/create', [DashboardController::class, 'create'])->name('products.create');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/products', [DashboardController::class, 'store'])->name('products.store');
Route::put('/products/{id}', [DashboardController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [DashboardController::class, 'destroy'])->name('products.destroy');
Route::post('/logout', function () {
    return redirect('/welcome'); // ke halaman home atau landing page
})->name('logout');

