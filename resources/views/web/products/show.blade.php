@extends('web.layouts.default')
@section('title', 'Produto')
@section('content')

    <section class="products-detail mt-5">
        <div class="container">
            <div class="d-flex justify-content-end">
                <a href="{{ route('products.index') }}" class="btn btn-secondary rounded-pill">
                    <i class="fas fa-arrow-left"></i>
                    Voltar
                </a>
            </div>
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="d-flex flex-column align-items-center p-4 mw-100">
                        @if ($product->images->count() == 0)
                            <img src="https://placehold.co/500x300" class="img-fluid rounded" width="500" height="300"
                                alt="Produto" style="width: auto; height: 300px">
                        @else
                            <img src="{{ Storage::url($product->images->sortBy('order')->first()->image) }}"
                                class="img-fluid rounded" width="500" height="300" alt="Produto"
                                style="width: auto; height: 300px">
                        @endif
                        <div class="thumbnail d-flex justify-content-evenly mt-4 w-100 align-items-center overflow-auto px-2"
                            style="min-height: 100px">
                            @foreach ($product->images->sortBy('order') as $image)
                                <img src="{{ Storage::url($image->image) }}" class="rounded" width="125" height="75"
                                    alt="detalhe de produto" style="width: auto; height: 75px">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 d-flex flex-column">
                        <h1 class="title">{{ $product->title }}</h1>
                        <p class="description">
                            {{ $product->description }}
                        </p>
                        <div class="d-flex justify-content-between">
                            <div class="price">R$ {{ $product->price }} / {{ $product->unit->abbreviation }}</div>
                            <div class="quantity d-flex align-items-center gap-2">
                                <button type="button" class="btn btn-outline-secondary btn-sm"
                                    onclick="decrementQuantity()">-</button>
                                <input type="text" class="form-control text-center" value="1" min="1"
                                    id="product-quantity" style="width: 70px;" step="{{ $product->unit->step }}">
                                <button type="button" class="btn btn-outline-secondary btn-sm"
                                    onclick="incrementQuantity()">+</button>
                            </div>
                        </div>
                        <div class="subtotal mt-2 d-flex align-items-center">
                            Subtotal: <span class="ms-2" id="subtotal">R$ {{ $product->price }}</span>
                        </div>
                        @if ($product->instructions->count() > 0)
                            <hr>
                            <div class="instructions">
                                <div class="title">Adicionar preferências</div>
                                <textarea class="form-control" name="" id=""></textarea>
                                <div class="d-flex mt-3 gap-2">
                                    @foreach ($product->instructions as $instruction)
                                        <button type="button" class="btn btn-outline-secondary js-add-instruction"
                                            data-instruction="{{ $instruction->name }}">
                                            {{ $instruction->name }}
                                        </button>
                                    @endforeach
                                    <span class="btn btn-link rounded-pill text-decoration-none">
                                        <i class="fas fa-pencil-alt"></i>
                                        ou escreva
                                    </span>
                                </div>

                            </div>
                        @endif

                        <div class="buttons">
                            <a href="{{ route('cart.index') }}" class="btn btn-secondary rounded-pill">
                                Adicionar ao carrinho
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $relatedProducts = \App\Models\Product::where('id', '!=', $product->id)->inRandomOrder()->limit(3)->get();
    @endphp

    @if ($relatedProducts->count() > 0)
        <section class="my-5">
            <div class="container">
                <h2 class="text-danger text-center mb-4">Confira outros produtos</h2>
                <div class="row text-center">
                    @foreach ($relatedProducts as $relatedProduct)
                        <div class="col-md-4">
                            <a href="{{ route('products.show', $relatedProduct->slug) }}">
                                @if ($relatedProduct->images->count() == 0)
                                    <img src="https://placehold.co/500x300" class="img-fluid rounded"
                                        alt="{{ $relatedProduct->title }}">
                                @else
                                    <img src="{{ Storage::url($relatedProduct->images->sortBy('order')->first()->image) }}"
                                        class="img-fluid rounded" alt="{{ $relatedProduct->title }}">
                                @endif
                            </a>
                            <p class="mt-2">{{ $relatedProduct->title }}</p>
                            <p class="text-danger">R$ {{ $relatedProduct->price }} /
                                {{ $relatedProduct->unit->abbreviation }}
                            </p>
                            <a href="{{ route('products.show', $relatedProduct->slug) }}"
                                class="btn btn-outline-danger">Ver
                                detalhes</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/web/css/product.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/web/js/product.js') }}"></script>
    <script>
    function parseLocaleNumber(str) {
        return parseFloat(str.replace(/\./g, '').replace(',', '.'));
    }

    function formatToLocaleNumber(num) {
        return num.toLocaleString('pt-BR', { minimumFractionDigits: 0, maximumFractionDigits: 2 });
    }

    function updateQuantity(isIncrement) {
        const input = document.getElementById('product-quantity');
        let quantity = parseLocaleNumber(input.value);
        const step = parseFloat("{{ $product->unit->step }}");
        const price = parseLocaleNumber('{{ number_format($product->price, 2, ',', '.') }}');

        if (isIncrement) {
            quantity += step;
        } else if (quantity > step) {
            quantity -= step;
        }

        input.value = formatToLocaleNumber(quantity);

        const subtotal = price * quantity;
        document.getElementById('subtotal').textContent = `R$ ${subtotal.toFixed(2).replace('.', ',')}`;
    }

    function incrementQuantity() {
        updateQuantity(true);
    }

    function decrementQuantity() {
        updateQuantity(false);
    }

        document.querySelectorAll('.js-add-instruction').forEach(btn => {
            btn.addEventListener('click', () => {
                const textarea = document.querySelector('textarea');
                const instructions = textarea.value.split(', ');
                if (!instructions.includes(btn.dataset.instruction)) {
                    textarea.value += btn.dataset.instruction + ', ';
                }
            })
        })
    </script>
@endpush
