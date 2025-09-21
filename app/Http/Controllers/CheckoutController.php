<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $request->validate([
            'shipping_address' => 'required|string',
            'payment_method' => 'required|string',
            'carts' => 'required|array',
        ]);

        $charts = $request->charts;

        $order = Order::create([
            'user_id' => Auth::id(),
            'status' => 'pending',
            'total_price' => 0,
            'shipping_address' => $request->shipping_address,
            'payment_method' => $request->payment_method,
            'order_code' => 'TEMP'.uniqid(),
        ]);

        $total = 0;

        foreach ($charts as $chart) {
            $product = Product::findOrFail($chart['product_id']);
            $orderItem = OrderItem::where('order_id', $order->id)->first();

            $subTotal = $product->price * $chart['quantity'];

            if ($orderItem) {
                $orderItem->quantity += $chart['quantity'];
                $orderItem->save();
            } else {
                OrderItem::create([
                    'order_id' => $order->id,
                    'price' => $product->harga,
                    'quantity' => $chart['quantity'],
                ]);
            }

            $total += $subTotal;

        }

        $orderCode = 'ORD-'.date('Ymd').'-'.str_pad($order->id, 5, '0', STR_PAD_LEFT);
        $order->update(['order_code' => $orderCode, 'total_price' => $total]);

        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');

        $midtrans = new \Midtrans\Snap;
        $params = [
            'transaction_details' => [
                'order_id' => $orderCode,
                'gross_amount' => $total,
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
        ];

        $snapToken = $midtrans->createTransaction($params)->token;

        return view('checkout', [
            'snapToken' => $snapToken,
            'order_id' => $order->id,
        ]);
    }

    public function success($orderCode)
    {
        Chart::where('user_id', Auth::id())->delete();

        return view('success', ['orderCode' => $orderCode]);
    }
}
