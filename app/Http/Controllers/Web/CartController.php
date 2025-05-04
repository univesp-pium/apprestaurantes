<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        return view('web.cart.index');
    }

    public function confirm()
    {
        return view('web.cart.confirmation');
    }

    public function add_item(Request $request)
    {

        $product = Product::find($request->product_id);
        if (!$product) {
            sweetalert()->error('Produto não encontrado!');
            return redirect()->back();
        }

        if (Order::where('client_id', Auth::guard('client')->user()->id)->where('is_open', true)->get()->count() > 0) {
            $order = Order::where('client_id', Auth::guard('client')->user()->id)->where('is_open', true)->first();
            $product_order_found = ProductOrder::where('order_id', $order->id)->where('product_id', $product->id)->first();

            // se o produto estiver presente neste pedido, atualizar
            if ($product_order_found) {

                $product_order_found->update([
                    'quantity'      => $request->quantity,
                    'price'         => $product->getPriceFloat(),
                    'discount'      => $product->discount,
                    'subtotal'      => ($product->getPriceFloat() - $product->getDiscountFloat()) * $request->quantity,
                    'observations'  => $request->observations,
                ]);

                $totalPrice = ProductOrder::where('order_id', $order->id)->sum('subtotal');
                $order->update([
                    'total' => $totalPrice,
                ]);
            } else {

                // TODO
                ProductOrder::create([
                    'product_id'    => $product->id,
                    'order_id'      => $order->id,
                    'quantity'      => $request->quantity,
                    'price'         => $product->getPriceFloat(),
                    'discount'      => $product->discount,
                    'subtotal'      => ($product->getPriceFloat() - $product->getDiscountFloat()) * $request->quantity,
                    'observations'  => $request->observations,
                ]);

                $totalPrice = ProductOrder::where('order_id', $order->id)->sum('subtotal');
                $order->update([
                    'total' => $totalPrice,
                ]);
            }
        } else {

            $order =  Order::create([
                'client_id' => Auth::guard('client')->user()->id,
                'total' => ($product->getPriceFloat() - $product->getDiscountFloat()) * $request->quantity,
            ]);

            // TODO
            ProductOrder::create([
                'product_id'    => $product->id,
                'order_id'      => $order->id,
                'quantity'      => $request->quantity,
                'price'         => $product->getPriceFloat(),
                'discount'      => $product->discount,
                'subtotal'      => ($product->getPriceFloat() - $product->getDiscountFloat()) * $request->quantity,
                'observations'  => $request->observations,
            ]);
        }

        return redirect()->back();
    }

    public function delete_item(Request $request) {}

    public function finish_cart(Request $request) {}
}
