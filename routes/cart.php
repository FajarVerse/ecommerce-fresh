<?php

use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
  Route::get('/cart', [ChartController::class, 'index'])->name('cart');
  Route::post('/cart', [ChartController::class, 'store'])->name('cart.store');
  Route::delete('/cart/{chart}', [ChartController::class, 'destroy'])->name('cart.destroy');
});
