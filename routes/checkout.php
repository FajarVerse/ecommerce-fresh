<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
  Route::get('/checkout', function () {
    return view('checkout');
  });
});
