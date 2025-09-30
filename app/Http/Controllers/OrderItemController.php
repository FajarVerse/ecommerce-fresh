<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        return view('dashboard.data-order-detail', ['order_items' => OrderItem::paginate(10)]);
        // return dd(OrderItem::paginate(10));
    }
}
