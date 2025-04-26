@extends('web.layouts.default')
@section('title', 'Carrinho')
@section('content')

    <h2 class="text-center text-danger mb-4">Itens Selecionados</h2>
    <div id="card-container" class="mb-5"></div>

    <section class="related-products mb-5">
        <div class="container">
            <h3 class="mb-3">Produtos Relacionados</h3>
            <div class="row g-3">
                <div class="col-md-4 d-flex align-items-center gap-2">
                    <img src="https://placehold.co/30x30" alt="Carvão" class="rounded">
                    <span>Carvão</span>
                    <button class="btn btn-outline-danger btn-sm related-minus" data-item="carvao">−</button>
                    <span class="fw-bold related-qty" id="carvao">0</span>
                    <button class="btn btn-outline-danger btn-sm related-plus" data-item="carvao">+</button>
                </div>
                <div class="col-md-4 d-flex align-items-center gap-2">
                    <img src="https://placehold.co/30x30" alt="Linguiça" class="rounded">
                    <span>Linguiça</span>
                    <button class="btn btn-outline-danger btn-sm related-minus" data-item="linguica">−</button>
                    <span class="fw-bold related-qty" id="linguica">0</span>
                    <button class="btn btn-outline-danger btn-sm related-plus" data-item="linguica">+</button>
                </div>
                <div class="col-md-4 d-flex align-items-center gap-2">
                    <img src="https://placehold.co/30x30" alt="Acendedor" class="rounded">
                    <span>Acendedor</span>
                    <button class="btn btn-outline-danger btn-sm related-minus" data-item="acendedor">−</button>
                    <span class="fw-bold related-qty" id="acendedor">0</span>
                    <button class="btn btn-outline-danger btn-sm related-plus" data-item="acendedor">+</button>
                </div>
            </div>
        </div>
    </section>

    <div class="text-center">
        <a href="{{ route('cart.confirm') }}" class="btn btn-danger btn-lg mt-4">Finalizar Compra</a>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/web/css/product.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/web/js/product.js') }}"></script>
@endpush
