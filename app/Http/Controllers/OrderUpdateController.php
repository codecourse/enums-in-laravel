<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class OrderUpdateController extends Controller
{
    public function __invoke(Request $request, Order $order)
    {
        $this->validate($request, [
            'status' => ['required', new Enum(OrderStatus::class)]
        ]);

        $order->update($request->only('status'));

        return back();
    }
}
