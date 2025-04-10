<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function orders()
    {
        return view('web.orders.index');
    }

    public function orders_show($order)
    {
        return view('web.orders.index');
    }
}
