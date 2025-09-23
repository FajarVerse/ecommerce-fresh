<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout', ['carts' => Chart::where('user_id', Auth::id())->get()]);
    }


    public function checkout(Request $request)
    {
        $user = Auth::user();

        $charts = Chart::where('user_id', $user->id)->get();

        if ($request->payment_method == 'cod') {
            $order = Order::create([
                'user_id' => $user->id,
                'status' => 'pending',
                'total_price' => 0,
                'order_code' => 'TEMP' . uniqid(),
                'payment_method' => $request->payment_method,
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
                        'product_id' => $product->id,
                        'order_id' => $order->id,
                        'price' => $product->harga,
                        'quantity' => $chart['quantity'],
                    ]);
                }

                $total += $subTotal;
            }

            return back();
        } else {
            $user = Auth::user();

            $charts = Chart::where('user_id', $user->id)->get();

            $order = Order::create([
                'user_id' => $user->id,
                'status' => 'pending',
                'total' => 0,
                'order_code' => 'TEMP' . uniqid(),
                'payment_method' => 'midtrans',
            ]);

            $total = 0;

            foreach ($charts as $chart) {
                $product = Product::findOrFail($chart['product_id']);
                $orderItem = OrderItem::where('order_id', $order->id)->where('product_id', $product->id)->first();

                $subTotal = $chart->price_snapshot * $chart->quantity;

                if ($orderItem) {
                    $orderItem->quantity += $chart['quantity'];
                    $orderItem->save();
                } else {
                    OrderItem::create([
                        'product_id' => $product->id,
                        'order_id' => $order->id,
                        'price' => $product->harga,
                        'quantity' => $chart['quantity'],
                    ]);
                }

                $total += $subTotal;
            }

            $orderCode = 'ORD-' . date('Ymd') . '-' . str_pad($order->id, 5, '0', STR_PAD_LEFT);
            $order->update(['order_code' => $orderCode, 'total' => $total]);

            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            \Midtrans\Config::$isProduction = config('midtrans.is_production');

            $midtrans = new \Midtrans\Snap;
            $params = [
                'transaction_details' => [
                    'order_id' => $orderCode,
                    'gross_amount' => (int) round($order->total),
                ],
                'customer_details' => [
                    'first_name' => Auth::user()->name,
                    'email' => Auth::user()->email,
                ],
            ];

            $snapToken = $midtrans->createTransaction($params)->token;

            return view('snap-payment', [
                'snapToken' => $snapToken,
                'order_id' => $order->id,
            ]);
        }
    }

    public function success()
    {
        Chart::where('user_id', Auth::id())->delete();

        return view('PembayaranSukses');
    }
}
