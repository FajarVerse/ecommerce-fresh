<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories = Category::withCount('product')->get();
    return view('shop', ['products' => Product::paginate(18), 'categories' => $categories]);
})->name('shop');



Route::get('/cart', function () {
    return view('Cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/shop_detail/{product:id}', function (Product $product) {
    $categories = Category::withCount('product')->get();
    return view('shopDetail', ["product" => $product, "products" => Product::paginate(4), 'categories' => $categories]);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/data_produk', function () {
    return view('DataProduk');
});

Route::get('/data_pesanan', function () {
    return view('DataPesanan');
});

Route::get('/data_pengguna', function () {
    return view('DataPengguna');
});

Route::get('/pengaturan', function () {
    return view('pengaturan');
});

Route::get('/profil', function () {
    return view('profile');
})->name('profil');

Route::get('/categories/{category:id}', function (Category $category) {
    return view('productbycategory', ["products" => $category->product]);
});

require __DIR__ . "/auth.php";
