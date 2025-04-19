@extends('admin.layouts.default')
@section('title', 'Produtos')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Produtos - Cadastrar</h3>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-primary rounded-pill">
                        <i class="fas fa-arrow-left"></i>
                        Voltar
                    </a>
                </div>
                <hr>

                <form action="{{ route('admin.products.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    @include('admin.products.form')
                </form>

            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style></style>
@endpush

@push('scripts')
    <script>
        var element = document.getElementById('price');
        var mask = IMask(element, {
            mask: Number,
            scale: 2,
            signed: false,
            thousandsSeparator: '.',
            padFractionalZeros: true,
            normalizeZeros: true,
            radix: ',',
            mapToRadix: ['.'],
        });

        element.addEventListener('blur', function() {
            let unmasked = mask.unmaskedValue; // "123456"
            let numericValue = parseFloat(unmasked) / 100;
            console.log(numericValue); // 1234.56
        });
    </script>
@endpush
