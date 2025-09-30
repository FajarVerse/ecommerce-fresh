<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

Route::middleware('auth', 'user')->group(function () {
  Route::get('/cart', [ChartController::class, 'index'])->name('cart');
  Route::post('/cart', [ChartController::class, 'store'])->name('cart.store');
  Route::delete('/cart/{chart}', [ChartController::class, 'destroy'])->name('cart.destroy');

  return view('Cart', ['product'=> Product::paginate(18)]);
});
