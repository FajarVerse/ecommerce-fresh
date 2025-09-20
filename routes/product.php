<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
  Route::get('/shop_detail/{product:id}', function (Product $product) {
    $categories = Category::withCount('product')->get();
    return view('shopDetail', ["product" => $product, "products" => Product::paginate(4), 'categories' => $categories]);
  });
});
