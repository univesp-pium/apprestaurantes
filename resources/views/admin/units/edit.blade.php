@extends('admin.layouts.default')
@section('title', 'Unidades')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Unidade - Editar</h3>
                    <a href="{{ route('admin.units.index') }}" class="btn btn-primary rounded-pill">
                        <i class="fas fa-arrow-left"></i>
                        Voltar
                    </a>
                </div>
                <hr>

                <form action="{{ route('admin.units.update', $unit['id']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('admin.units.form', ['unit' => $unit])
                </form>

            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style></style>
@endpush

@push('scripts')
    <script></script>
@endpush

