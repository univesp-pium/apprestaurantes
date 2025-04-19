@extends('admin.layouts.default')
@section('title', 'Instruções')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Instruções - Editar</h3>
                    <a href="{{ route('admin.instructions.index') }}" class="btn btn-primary rounded-pill">
                        <i class="fas fa-arrow-left"></i>
                        Voltar
                    </a>
                </div>
                <hr>

                <form action="{{ route('admin.instructions.update', $instruction['id']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('admin.instructions.form', ['instruction' => $instruction])
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

