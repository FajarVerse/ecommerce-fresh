<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\View\Components\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class ChartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('Cart', ['carts' => Chart::where('user_id', $user->id)->get()]);
        // return dd(Chart::where('user_id', $user->id)->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'qty' => 'required|integer',
        ]);

        $user = Auth::user();
        $product = Product::findOrFail($request->product_id);

        $chart = chart::where('user_id', $user->id)->where('product_id', $request->product_id)->first();

        if ($chart) {
            $chart->quantity += $request->qty;
            $chart->save();
        } else (
            Chart::create([
                'user_id' => $user->id,
                'product_id' => $request->product_id,
                'quantity' => $request->qty,
                'price_snapshot' => $product->harga
            ])
        );

        return back();

        // return dd($request->all());
    }

    public function updateQty(request $request, Chart $chart)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        if ($chart->user->id !== Auth::user()->id) {
            abort(403);
        }

        $chart->update([
            'quantity' => $request->quantity
        ]);

        return back();
    }

    public function destroy(Chart $chart)
    {
        Chart::where('id', $chart->id)->where('user_id', Auth::id())->delete();

        return back();
    }
}
