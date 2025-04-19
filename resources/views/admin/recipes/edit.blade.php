@extends('admin.layouts.default')
@section('title', 'Receitas')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Receita - Editar</h3>
                    <a href="{{ route('admin.recipes.index') }}" class="btn btn-primary rounded-pill">
                        <i class="fas fa-arrow-left"></i>
                        Voltar
                    </a>
                </div>
                <hr>

                <form action="{{ route('admin.recipes.update', $recipe['id']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('admin.recipes.form', ['recipe' => $recipe])
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

