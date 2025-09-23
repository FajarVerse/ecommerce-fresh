<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
  Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
  Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout.checkout');
});
