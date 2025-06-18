<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderProduct;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\Verifier;

class CartController extends Controller
{
    use Verifier;

    public function index()
    {
        $order = Order::where('client_id', Auth::guard('client')->user()->id)
            ->where('is_open', true)
            ->with(['products' => function ($query) {
                $query->withPivot('quantity', 'price', 'discount', 'subtotal', 'observations');
            }])
            ->first();

        return view('web.cart.index', compact('order'));
    }

    public function add_item(Request $request)
    {
        $success = $this->verifyCode(function () use ($request) {
            $request['quantity'] = str_replace(',', '.', $request->quantity);

            $product = Product::find($request->product_id);
            if (!$product) {
                sweetalert()->error('Produto não encontrado!');
                return redirect()->back();
            }

            if (Order::where('client_id', Auth::guard('client')->user()->id)->where('is_open', true)->get()->count() > 0) {
                $order = Order::where('client_id', Auth::guard('client')->user()->id)->where('is_open', true)->first();
                $order_product_found = OrderProduct::where('order_id', $order->id)->where('product_id', $product->id)->first();

                if ($order_product_found) {

                    $order_product_found->update([
                        'quantity'                  => $request->quantity,
                        'price'                     => $product->price,
                        'discount'                  => $product->discount,
                        'subtotal'                  => ($product->price - $product->discount) * $request->quantity,
                        'observations'              => $request->observations,
                    ]);

                    $totalPrice = OrderProduct::where('order_id', $order->id)->sum('subtotal');
                    $order->update([
                        'total' => $totalPrice,
                    ]);
                } else {
                    OrderProduct::create([
                        'product_id'                => $product->id,
                        'order_id'                  => $order->id,
                        'quantity'                  => $request->quantity,
                        'price'                     => $product->price,
                        'discount'                  => $product->discount,
                        'subtotal'                  => ($product->price - $product->discount) * $request->quantity,
                        'observations'              => $request->observations,
                    ]);

                    $totalPrice = OrderProduct::where('order_id', $order->id)->sum('subtotal');
                    $order->update([
                        'total' => $totalPrice,
                    ]);
                }
            } else {

                $order =  Order::create([
                    'client_id' => Auth::guard('client')->user()->id,
                    'total' => ($product->price - $product->discount) * $request->quantity,
                ]);

                OrderProduct::create([
                    'product_id'                => $product->id,
                    'order_id'                  => $order->id,
                    'quantity'                  => $request->quantity,
                    'price'                     => $product->price,
                    'discount'                  => $product->discount,
                    'subtotal'                  => ($product->price - $product->discount) * $request->quantity,
                    'observations'              => $request->observations,
                ]);
            }
        });

        if ($success) {
            sweetalert()->success('Item adicionado ao carrinho com sucesso!');
            return redirect()->route('client-area.cart.index');
        } else {
            sweetalert()->error('Não foi possível adicionar o item ao carrinho!');
            return redirect()->back();
        }
    }

    public function delete_item(Request $request)
    {
        $success = $this->verifyCode(function () use ($request) {
            $item = OrderProduct::where('order_id', $request->order_id)->where('product_id', $request->product_id)->first();
            $item->delete();
            $order = Order::find($request->order_id);
            if ($order->products->count() == 0) {
                $order->delete();
            }
        });

        if ($success) {
            sweetalert()->success('Item removido do carrinho com sucesso!');
            return redirect()->route('client-area.cart.index');
        } else {
            sweetalert()->error('Erro ao remover item!');
            return redirect()->back();
        }
    }

    public function finish_cart(Request $request)
    {
        $order = null;

        $success = $this->verifyCode(function () use ($request, &$order) {
            $order = Order::where('client_id', Auth::guard('client')->user()->id)
                ->where('is_open', true)
                ->with(['products' => function ($query) {
                    $query->withPivot('quantity', 'price', 'discount', 'subtotal', 'observations');
                }])
                ->first();

            if ($order) {
                $order->update([
                    'is_open' => false,
                ]);

                OrderStatus::create([
                    'status_id'     => 1,
                    'order_id'      => $order->id,
                    'user_id'       => Auth::guard('client')->id(),
                    'observation'   => 'Pedido criado pelo cliente',
                ]);
            }
        });

        if ($success && $order) {
            sweetalert()->success('Carrinho finalizado com sucesso!');
            return redirect()->route('client-area.orders.show', ['order' => $order->id]);
        } else {
            sweetalert()->error('Erro ao finalizar o carrinho!');
            return redirect()->back();
        }
    }
}
