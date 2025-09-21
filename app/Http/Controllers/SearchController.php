<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
{
    $query = Product::query();

    // Filter nama
    if ($request->filled('q')) {
        $query->where('nama', 'like', '%' . $request->q . '%');
    }

    // Filter kategori
    if ($request->filled('category')) {
        $query->where('category_id', $request->category);
    }

    // Sorting
    if ($request->filled('sort')) {
        switch ($request->sort) {
            case 'bestseller':
                $query->withCount('order')
                      ->orderBy('order_count', 'desc');
                break;
            case 'low_price':
                $query->orderBy('harga', 'asc');
                break;
            case 'high_price':
                $query->orderBy('harga', 'desc');
                break;
        }
    } else {
        // default urutkan terbaru
        $query->latest();
    }

    $products = $query->paginate(8);
    $categories = Category::withCount('product')->get();

    return view('shop', compact('products', 'categories'));
}


}

?>