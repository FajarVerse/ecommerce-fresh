<?php

use App\Http\Controllers\ProdukController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'user')->group(function () {
  // Route::get('/shop_detail/{product:id}', function (Product $product) {
  //   $categories = Category::withCount('product')->get();
  //   return view('shopDetail', ["product" => $product, "products" => Product::paginate(4), 'categories' => $categories]);
  // });

  Route::get('/shop_detail/{product:id}', [ProdukController::class, 'show'])->name('shop_detail');
});
