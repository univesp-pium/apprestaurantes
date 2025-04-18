@extends('admin.layouts.default')
@section('title', 'Categorias')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Categoria - Editar</h3>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary rounded-pill">
                        <i class="fas fa-arrow-left"></i>
                        Voltar
                    </a>
                </div>
                <hr>

                <form action="{{ route('admin.categories.update', $category['id']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('admin.categories.form', ['category' => $category])
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
