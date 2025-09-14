<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
    return view('Order', ['ordes' => Order::filter(request(['keyword']))->paginate(10)]);
    }
}
