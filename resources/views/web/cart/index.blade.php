@extends('web.layouts.default')
@section('title', 'Carrinho')
@section('content')

    <h2 class="text-center text-danger mt-5">Itens Selecionados</h2>
    <div id="card-container" class="mb-5"></div>

    <section class="related-products mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if (isset($order) && $order->products->count() > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Imagem</th>
                                    <th>Nome</th>
                                    <th>Quantidade</th>
                                    <th>Preço</th>
                                    <th>Subtotal</th>
                                    <th>Editar</th>
                                    <th>Remover</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->products as $product)
                                    <tr>
                                        <td>
                                            <a href="{{ route('products.show', $product->slug) }}">
                                                @if ($product->images->count() > 0)
                                                    <img src="{{ Storage::url($product->images->first()->image) }}"
                                                        class="img-fluid rounded" alt="Produto 1" width="30"
                                                        height="20" alt="{{ $product->title }}">
                                                @else
                                                    <img src="https://placehold.co/30x20" class="img-fluid rounded"
                                                        alt="Produto 1" width="30" height="20"
                                                        alt="{{ $product->title }}">
                                                @endif
                                            </a>
                                        </td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ number_format($product->pivot->quantity, 3, ',', '.') }} /
                                            {{ $product->unit->abbreviation }}</td>
                                        <td>
                                            @if ($product->discount > 0)
                                                <span class="text-decoration-line-through text-muted me-2">R$
                                                    {{ number_format($product->price, 2, ',', '.') }}
                                                </span>
                                            @endif
                                            R$ {{ number_format($product->price - $product->discount, 2, ',', '.') }}
                                        </td>
                                        <td>
                                            @if ($product->discount > 0)
                                                <span class="text-decoration-line-through text-muted me-2">R$
                                                    {{ number_format($product->price * $product->pivot->quantity, 2, ',', '.') }}
                                                </span>
                                            @endif
                                            R$
                                            {{ number_format(($product->price - $product->discount) * $product->pivot->quantity, 2, ',', '.') }}
                                        </td>
                                        <td>
                                            <a href="{{ route('products.show', $product->slug) }}"
                                                class="btn btn-primary btn-sm rounded-pill">
                                                <i class="fas fa-edit"></i>
                                                Editar
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('client-area.cart.del_item') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <button type="submit"
                                                    class="js-delete-button btn btn-danger btn-sm rounded-pill">
                                                    <i class="fas fa-trash"></i>
                                                    Remover
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="alert alert-info">
                            Seu carrinho esta vazio!
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <div class="text-center">
        <a href="{{ route('products.index') }}" class="btn btn-secondary btn-lg mt-4">Ver mais produtos</a>
        <a href="{{ route('client-area.cart.confirm') }}" class="btn btn-danger btn-lg mt-4">Finalizar Compra</a>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/web/css/product.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/web/js/product.js') }}"></script>
@endpush
