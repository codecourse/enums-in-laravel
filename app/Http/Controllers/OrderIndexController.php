<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderIndexController extends Controller
{
    public function __invoke()
    {
        return view('orders.index', [
            'orders' => Order::latest()->get(),
        ]);
    }
}
