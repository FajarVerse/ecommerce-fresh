<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'user')->group(function () {
  Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
  Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout.checkout');
  Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
});
