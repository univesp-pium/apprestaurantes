@extends('web.layouts.default')
@section('title', 'Produtos')
@section('content')

    <!-- Filtros por Categoria -->
    <section class="mb-4 mt-5">
        <div class="container">
            <h2 class="text-danger text-center mb-3">Selecione uma categoria</h2>
            <div class="d-flex justify-content-center">
                <div class="btn-group flex-wrap" role="group" aria-label="Categorias">
                    @foreach ($categories as $category)
                        <a href="# {{ $category->slug }}" class="btn btn-outline-danger filter-btn">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Produtos -->
    <section id="produtos">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($products as $product)
                    <div class="col product-card" data-category="churrasco">
                        <div class="card h-100">
                            <a href="{{ route('products.show', $product->slug) }}">
                                @if ($product->images->count() == 0)
                                    <img src="https://placehold.co/500x300" class="card-img-top rounded p-2" alt="Carne 1">
                                @else
                                    <img src="{{ Storage::url($product->images->sortBy('order')->first()->image) }}"
                                        class="card-img-top rounded p-2" alt="Carne 1">
                                @endif
                            </a>
                            <div class="card-body d-flex flex-column justify-content-end">
                                <h5 class="card-title text-center text-danger">{{ $product->title }} - R$
                                    {{ number_format($product->price, 2, ',', '.') }} / {{ $product->unit->abbreviation }}</h5>
                                <div class="d-flex justify-content-center align-items-center gap-2 my-3">
                                </div>
                                <a href="{{ route('products.show', $product->slug) }}" class="btn btn-danger w-100">
                                    Ver detalhes
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Produtos Relacionados -->
    <section class="my-5">
        <div class="container">
            <h2 class="text-danger text-center mb-4">Produtos Relacionados</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="https://placehold.co/300x200" class="img-fluid rounded" alt="Produto 1">
                    <p class="mt-2">Produto 1</p>
                </div>
                <div class="col-md-4">
                    <img src="https://placehold.co/300x200" class="img-fluid rounded" alt="Produto 2">
                    <p class="mt-2">Produto 2</p>
                </div>
                <div class="col-md-4">
                    <img src="https://placehold.co/300x200" class="img-fluid rounded" alt="Produto 3">
                    <p class="mt-2">Produto 3</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Promoções -->
    {{-- <section class="my-5 text-center">
        <div class="container">
            <h2 class="text-danger mb-4">Promoções ativas</h2>
            <img src="https://placehold.co/500x300" class="img-fluid rounded shadow" alt="Promoção do mês">
        </div>
    </section> --}}

    <!-- Seção Fale com a Gente -->
    <section class="my-5 text-center">
        <div class="container">
            <h2 class="text-danger mb-3">Fale com a gente</h2>
            <p class="mb-3">Entre em contato pelo WhatsApp para dúvidas ou pedidos!</p>
            <a href="https://wa.me/5511999999999" target="_blank" class="btn btn-success btn-lg">
                <i class="bi bi-whatsapp"></i> Conversar no WhatsApp
            </a>
        </div>
    </section>


@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/web/css/products.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/web/js/products.js') }}"></script>
@endpush
