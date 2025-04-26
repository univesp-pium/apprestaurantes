@extends('web.layouts.default')
@section('title', 'Produtos')
@section('content')

    <!-- Filtros por Categoria -->
    <section class="mb-4 mt-5">
        <div class="container">
            <h2 class="text-danger text-center mb-3">Selecione uma categoria</h2>
            <div class="d-flex justify-content-center">
                <div class="btn-group flex-wrap" role="group" aria-label="Categorias">
                    <button class="btn btn-outline-danger filter-btn" data-category="churrasco">Churrasco</button>
                    <button class="btn btn-outline-danger filter-btn" data-category="panela">Panela</button>
                    <button class="btn btn-outline-danger filter-btn" data-category="recheada">Recheada</button>
                    <button class="btn btn-outline-danger filter-btn" data-category="moida">Moída</button>
                    <button class="btn btn-outline-danger filter-btn" data-category="bassi">Bassi</button>
                    <button class="btn btn-outline-danger filter-btn" data-category="assar">Assar</button>
                    <button class="btn btn-outline-danger filter-btn" data-category="bifes">Bifes</button>
                    <button class="btn btn-outline-danger filter-btn" data-category="frango">Frango</button>
                    <button class="btn btn-outline-danger filter-btn" data-category="suinos">Suínos</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Produtos -->
    <section id="produtos">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col product-card" data-category="churrasco">
                    <div class="card h-100">
                        <img src="https://placehold.co/300x200" class="card-img-top" alt="Carne 1">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Contra Filé 500g - R$ 29,99</h5>
                            <div class="d-flex justify-content-center align-items-center gap-2 my-3">
                                <button class="btn btn-danger btn-sm minus">-</button>
                                <span class="quantity">1</span>
                                <button class="btn btn-danger btn-sm plus">+</button>
                            </div>
                            <a href="{{ route('products.show', 'product') }}" class="btn btn-danger w-100">
                                Adicionar ao Carrinho
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col product-card" data-category="panela">
                    <div class="card h-100">
                        <img src="https://placehold.co/300x200" class="card-img-top" alt="Carne 2">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Coxão Mole 500g - R$ 29,99</h5>
                            <div class="d-flex justify-content-center align-items-center gap-2 my-3">
                                <button class="btn btn-danger btn-sm minus">-</button>
                                <span class="quantity">1</span>
                                <button class="btn btn-danger btn-sm plus">+</button>
                            </div>
                            <a href="{{ route('products.show', 'product') }}" class="btn btn-danger w-100">
                                Adicionar ao Carrinho
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Quem Somos Nós -->
    <section class="my-5">
        <div class="container">
            <h2 class="text-danger text-center mb-4">Quem somos nós?</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="https://placehold.co/300x200" class="img-fluid rounded" alt="Equipe 1">
                    <p class="mt-2">Profissional 1</p>
                </div>
                <div class="col-md-4">
                    <img src="https://placehold.co/300x200" class="img-fluid rounded" alt="Equipe 2">
                    <p class="mt-2">Profissional 2</p>
                </div>
                <div class="col-md-4">
                    <img src="https://placehold.co/300x200" class="img-fluid rounded" alt="Equipe 3">
                    <p class="mt-2">Profissional 3</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Promoção do Mês -->
    <section class="my-5 text-center">
        <div class="container">
            <h2 class="text-danger mb-4">Promoção do mês</h2>
            <img src="https://placehold.co/500x300" class="img-fluid rounded shadow" alt="Promoção do mês">
        </div>
    </section>

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
