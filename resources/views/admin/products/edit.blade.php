@extends('admin.layouts.default')
@section('title', 'Produtos')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Produto - Editar</h3>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-primary rounded-pill">
                        <i class="fas fa-arrow-left"></i>
                        Voltar
                    </a>
                </div>
                <hr>

                <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('admin.products.form', ['product' => $product])
                </form>

                @include('admin.products.dropzone', ['product' => $product])

            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style></style>
@endpush

@push('scripts')
    <script>
        document.querySelectorAll('.js_mask_money').forEach(input => {
            IMask(input, {
                mask: Number,
                scale: 2,
                signed: false,
                thousandsSeparator: '.',
                padFractionalZeros: true,
                normalizeZeros: true,
                radix: ',',
                mapToRadix: ['.'],
            });

            input.addEventListener('blur', function() {
                let unmasked = input.value.replace(/[.\s]/g, '');
                let numericValue = parseFloat(unmasked) / 100;
            });
        });
    </script>
@endpush
