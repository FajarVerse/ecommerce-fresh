<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use Illuminate\Http\Request;
use App\View\Components\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class ChartController extends Controller
{
    public function index()
    {
        return view('chart', ['chart' => Chart::filter(request(['keyword']))->paginate(10)]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'producr_id' => 'required|integer',
            'qty' => 'required|integer',
            'price_snapshot' => 'required|integer'
        ]);

        $chart = chart::where('user_id', Auth::id())->where('product_id', $request->product_id)->first();

        if ($chart) {
            $chart->quantity += $request->qty;
            $chart->save();
        } else (
            Chart::create([
                'user_id' => $request->user_id,
                'product_id' => $request->product_id,
                'quantity' => $request->qty,
                'price_snapshot' => $request->price_snapshot
            ])
        );

        return back();
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
