<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
  Route::get('/dashboard/product', [ProdukController::class, 'index'])->name('dahsboard.product');

  Route::get('/dashboard/order', [OrderController::class, 'index'])->name('dashboard.order');

  Route::get('/dashboard/order-detail', [OrderItemController::class, 'index'])->name('dashboard.order-detail');
});
