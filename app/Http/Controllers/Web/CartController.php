<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderProduct;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Traits\CheckTransaction;

class CartController extends Controller
{
    use CheckTransaction;

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
        $errors = [];
        DB::beginTransaction();

        $request['quantity'] = str_replace(',', '.', $request->quantity);

        $product = Product::find($request->product_id);
        if (!$product) {
            sweetalert()->error('Produto não encontrado!');
            return redirect()->back();
        }

        if (Order::where('client_id', Auth::guard('client')->user()->id)->where('is_open', true)->get()->count() > 0) {
            $order = Order::where('client_id', Auth::guard('client')->user()->id)->where('is_open', true)->first();
            $order_product_found = OrderProduct::where('order_id', $order->id)->where('product_id', $product->id)->first();

            // se o produto estiver presente neste pedido, atualizar
            if ($order_product_found) {

                try {

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
                } catch (\Throwable $th) {
                    $errors[] = $th->getMessage();
                    (env('APP_DEBUG') == 'true' && env('APP_ENV') == 'local') ? dd($th) : Log::error($th);
                }
            } else {

                // TODO
                try {
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
                } catch (\Throwable $th) {
                    $errors[] = $th->getMessage();
                    (env('APP_DEBUG') == 'true' && env('APP_ENV') == 'local') ? dd($th) : Log::error($th);
                }
            }
        } else {

            try {

                $order =  Order::create([
                    'client_id' => Auth::guard('client')->user()->id,
                    'total_with_discount' => ($product->price - $product->discount) * $request->quantity,
                    'total' => ($product->price - $product->discount) * $request->quantity,
                ]);

                // TODO
                OrderProduct::create([
                    'product_id'                => $product->id,
                    'order_id'                  => $order->id,
                    'quantity'                  => $request->quantity,
                    'price'                     => $product->price,
                    'discount'                  => $product->discount,
                    'subtotal'                  => ($product->price - $product->discount) * $request->quantity,
                    'observations'              => $request->observations,
                ]);
            } catch (\Throwable $th) {
                $errors[] = $th->getMessage();
                (env('APP_DEBUG') == 'true' && env('APP_ENV') == 'local') ? dd($th) : Log::error($th);
            }
        }

        if (count($errors) == 0) {
            DB::commit();
            sweetalert()->success('Item adicionado ao carrinho com sucesso!');
            return redirect()->route('client-area.cart.index');
        } else {
            DB::rollBack();
            sweetalert()->error('Não foi possível adicionar o item ao carrinho!');
            return redirect()->back();
        }
    }

    public function delete_item(Request $request)
    {
        $errors = [];
        DB::beginTransaction();

        $item = OrderProduct::where('order_id', $request->order_id)->where('product_id', $request->product_id)->first();
        $order = Order::find($request->order_id);

        if (!$item) {
            sweetalert()->error('Item não encontrado!');
            return redirect()->back();
        }

        try {
            $item->delete();
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
            (env('APP_DEBUG') == 'true' && env('APP_ENV') == 'local') ? dd($th) : Log::error($th);
        }

        try {
            if ($order->products->count() == 0) {
                $order->delete();
            }
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
            (env('APP_DEBUG') == 'true' && env('APP_ENV') == 'local') ? dd($th) : Log::error($th);
        }

        if (count($errors) == 0) {
            DB::commit();
            sweetalert()->success('Item removido do carrinho com sucesso!');
            return redirect()->route('client-area.cart.index');
        } else {
            DB::rollBack();
            sweetalert()->error('Erro ao remover item!');
            return redirect()->back();
        }
    }

    public function finish_cart(Request $request)
    {
        $success = $this->checkTransaction(function () use ($request) {

            $order = Order::where('client_id', Auth::guard('client')->user()->id)
                ->where('is_open', true)
                ->with(['products' => function ($query) {
                    $query->withPivot('quantity', 'price', 'discount', 'subtotal', 'observations');
                }])
                ->first();

            $order->update([
                'is_open' => false,
            ]);

            OrderStatus::create([
                'status_id'     => 1,
                'order_id'      => $order->id,
                'user_id'       => Auth::guard('client')->id(),
                'observation'   => 'Pedido criado pelo cliente',
            ]);
        });

        if ($success) {
            sweetalert()->success('Carrinho finalizado com sucesso!');
            return redirect()->route('client-area.cart.index');
        } else {
            sweetalert()->error('Erro ao remover item!');
            return redirect()->back();
        }
    }
}
