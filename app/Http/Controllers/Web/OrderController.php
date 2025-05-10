<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function orders()
    {
        $orders = Order::where('client_id', Auth::guard('client')->user()->id)->paginate(15);
        return view('web.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        if (!$order) {
            sweetalert()->error('Pedido não encontrado!');
            return redirect()->route('client-area.orders.index');
        }
        return view('web.orders.show', compact('order'));
    }
}
