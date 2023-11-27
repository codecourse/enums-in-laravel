<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class OrderStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'status' => ['required', new Enum(OrderStatus::class)]
        ]);

        Order::create($request->only('status'));

        return back();
    }
}
