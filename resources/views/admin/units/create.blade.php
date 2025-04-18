@extends('admin.layouts.default')
@section('title', 'Unidades')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Unidades - Cadastrar</h3>
                    <a href="{{ route('admin.units.index') }}" class="btn btn-primary rounded-pill">
                        <i class="fas fa-arrow-left"></i>
                        Voltar
                    </a>
                </div>
                <hr>

                <form action="{{ route('admin.units.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    @include('admin.units.form')
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
        const element = document.getElementById('step');
        const maskOptions = {
            mask: '0.000'
        };
        const mask = IMask(element, maskOptions);
    </script>
@endpush
