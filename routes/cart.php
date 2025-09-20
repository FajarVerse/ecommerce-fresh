<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
  Route::get('/cart', function () {
    return view('Cart');
  })->name('cart');
});


?>