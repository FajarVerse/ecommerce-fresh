<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // Ambil data order + relasi user & product
        $orders = Order::with(['user', 'product'])->paginate(10);

        // Kirim ke view resources/views/dashboard/orders/index.blade.php
        return view('dashboard.data-order', compact('orders'));
    }
}

// public function index()
    // {
    //     $orders = Order::orderBy('order_date', 'desc')->get();
    //     return view('RiwayatPesanan', compact('orders'));
    // }
