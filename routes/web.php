<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PaymentSuccessController;

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::resource('product', ProdukController::class);
});

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

Route::get('/riwayatpesanan', function () {
    return view('RiwayatPesanan');
});

Route::get('/categories/{category:id}', function (Category $category) {
    return view('productbycategory', ["products" => $category->product]);
});

Route::get('/dashboard/data-user', function () {
    return view('RiwayatPesanan');
});

Route::get('/dashboard/data-user', [ProdukController::class, 'index'])->name('dashboard.data-user');

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/category/{id}', [ProdukController::class, 'byCategory']);

Route::middleware(['auth'])->group(function () {
    Route::post('/wishlist/{productId}', [ProdukController::class, 'addToWishlist'])->name('wishlist.add');
    Route::delete('/wishlist/{productId}', [ProdukController::class, 'removeFromWishlist'])->name('wishlist.remove');
    Route::get('/wishlist', [ProdukController::class, 'showWishlist'])->name('wishlist.show');
});



Route::get('/pemb-sukses', [PaymentSuccessController::class, 'sukses'])->name('pembayaran.sukses');

require __DIR__ . "/auth.php";
require __DIR__ . '/shop.php';
require __DIR__ . '/product.php';
require __DIR__ . '/cart.php';
require __DIR__ . '/checkout.php';
require __DIR__ . '/profile.php';


// Dashboard
require __DIR__ . '/dashboard.php';
