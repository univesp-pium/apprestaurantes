@extends('web.layouts.default')
@section('title', 'Produtos')
@section('content')

    <section class="category-select">
        <div class="container">
            <h2 class="category-select-title mt-5">Selecione uma categoria de carnes</h2>

            <div class="buttons mt-3 d-flex gap-2">
                <button class="btn btn-sm rounded-pill">Nome 1</button>
                <button class="btn btn-sm rounded-pill">Nome 1</button>
                <button class="btn btn-sm rounded-pill">Nome 1</button>
                <button class="btn btn-sm rounded-pill">Nome 1</button>
            </div>

        </div>
    </section>

    <section class="product-list">
        <div class="container">
            <div class="row">
                @for ($i = 0; $i < 12; $i++)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-3">
                        <div class="card">
                            <img src="https://placehold.co/300x300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/web/css/products.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/web/js/products.js') }}"></script>
@endpush
