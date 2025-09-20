<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function index(Product $product)
    {
        $product->load('product_id');

        return view('shopDetail', ['product' => $product]);
    }

    public function addToChart(Request $request)
    {
        $request->merge([
            'user_id' => auth()->id,
        ]);

        $chartController = new ChartController();

        return $chartController->store($request);
    }
}
