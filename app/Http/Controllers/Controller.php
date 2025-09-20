<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

abstract class Controller
{
    public function show($id)
    {
        // Ambil produk detail
        $product = Product::findOrFail($id);

        // Ambil semua kategori + jumlah produk
        $categories = Category::withCount('products')->get();

        // Ambil produk lain untuk related products (bisa filter by category)
        $products = Product::where('id', '!=', $id)
            ->latest()
            ->take(6)
            ->get();

        // Kirim data ke view
        return view('shopDetail', compact('product', 'categories', 'products'));
    }
}
