<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
  Route::get('/', function () {
    $categories = Category::withCount('product')->get();
    return view('shop', ['products' => Product::paginate(18), 'categories' => $categories]);
  })->name('shop');
});
