@extends('web.layouts.default')
@section('title', 'Produto')
@section('content')

    Produto


    <a href="{{ route('cart.index') }}">
        Exemplo de link para o carrinho
    </a>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/web/css/product.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/web/js/product.js') }}"></script>
@endpush
