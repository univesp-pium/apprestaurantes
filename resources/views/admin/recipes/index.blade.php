@extends('admin.layouts.default')
@section('title', 'Receitas')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Receitas</h3>
                    <a href="{{ route('admin.recipes.create') }}" class="btn btn-success rounded-pill">
                        <i class="fas fa-plus"></i>
                        Adicionar
                    </a>
                </div>
                <hr>
                <table id="recipesTable" class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Slug</th>
                            <th>Ativo</th>
                            <th width=1>Editar</th>
                            <th width=1>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($recipes as $recipe)
                            <tr>
                                <td>{{ $recipe->name }}</td>
                                <td>{{ $recipe->slug }}</td>
                                <td>{{ $recipe->active ? 'Sim' : 'Não' }}</td>
                                <td class="align-middle" style="white-space: nowrap">
                                    <a href="{{ route('admin.recipes.edit', $recipe->id) }}"
                                        class="btn btn-primary btn-sm rounded-pill">
                                        <i class="fas fa-edit"></i>
                                        Editar
                                    </a>
                                </td>
                                <td class="align-middle" style="white-space: nowrap">
                                    <form action="{{ route('admin.recipes.destroy', $recipe->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="js-delete-button btn btn-danger btn-sm rounded-pill">
                                            <i class="fas fa-trash"></i>
                                            Excluir
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="100%" class="text-center">Nenhuma registro cadastrado</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
        {{ $recipes->links() }}
    </div>
@endsection

@push('styles')
    <style></style>
@endpush

@push('scripts')
    <script></script>
@endpush

