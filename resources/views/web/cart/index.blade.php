@extends('web.layouts.default')
@section('title', 'Carrinho')
@section('content')

    <h2 class="text-center text-danger mt-5">Itens Selecionados</h2>
    <div id="card-container" class="mb-5"></div>

    <section class="related-products mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">


                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Quantidade</th>
                                <th>Preço</th>
                                <th>Desconto</th>
                                <th>Subtotal</th>
                                <th>Valor Total</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->products as $product)
                            @dd($product->pivot->quantity)
                                <tr>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->pivot->quantity }}</td>
                                    <td>R$ {{ $product->getPriceFormatted() }}</td>
                                    <td>R$ {{ $product->getDiscountFormatted() }}</td>
                                    <td>R$ {{ $product->getPriceWithDiscountFormatted() }}</td>
                                    <td>R$ {{ $product->getPriceWithDiscountFormatted() * $product->pivot->quantity }}</td>
                                    <td>
                                        <a href="{{ route('products.show', $product->slug) }}"
                                            class="btn btn-primary btn-sm rounded-pill">
                                            <i class="fas fa-edit"></i>
                                            Editar
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div class="text-center">
        <a href="{{ route('client-area.cart.confirm') }}" class="btn btn-danger btn-lg mt-4">Finalizar Compra</a>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/web/css/product.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/web/js/product.js') }}"></script>
@endpush
