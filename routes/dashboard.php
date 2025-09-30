<?php

use App\Http\Controllers\CategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\UserProfileController;

Route::middleware('auth', 'admin')->group(function () {

  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


  Route::get('/dashboard/product', [ProdukController::class, 'index'])->name('dashboard.product');
  Route::post('/dashboard/product/add-product', [ProdukController::class, 'store'])->name('dashboard.product.store');
  Route::get('/dashboard/add-product', [ProdukController::class, 'create'])->name('dashboard.product.create');
  Route::get('/dashboard/edit-product/{product}', [ProdukController::class, 'edit'])->name('dashboard.product.edit');
  Route::post('/dashboard/update-product', [ProdukController::class, 'update'])->name('dashboard.product.update');
  Route::delete('/dashboard/delete-product/{product}', [ProdukController::class, 'destroy'])->name('dashboard.product.destroy');

  Route::get('/dashboard/category', [CategoriController::class, 'index'])->name('dashboard.category');
  Route::get('/dashboard/add-category', [CategoriController::class, 'create'])->name('dashboard.category.create');
  Route::post('/dashboard/add-category', [CategoriController::class, 'store'])->name('dashboard.category.store');
  Route::get('/dashboard/edit-category/{category}', [CategoriController::class, 'edit'])->name('dashboard.category.edit');
  Route::post('/dashboard/update-category/', [CategoriController::class, 'update'])->name('dashboard.category.update');
  Route::delete('/dashboard/delete-category/{category}', [CategoriController::class, 'destroy'])->name('dashboard.category.destroy');

  Route::get('/dashboard/order', [OrderController::class, 'index'])->name('dashboard.order');

  Route::get('/dashboard/order-detail', [OrderItemController::class, 'index'])->name('dashboard.order-detail');
  Route::get('/dashboard/data-user', [UserProfileController::class, 'userdata'])->name('dashboard.data-user');
});
