@extends('admin.layouts.default')
@section('title', 'Unidades')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Unidades</h3>
                    <a href="{{ route('admin.units.create') }}" class="btn btn-success rounded-pill">
                        <i class="fas fa-plus"></i>
                        Adicionar
                    </a>
                </div>
                <hr>
                <table id="unitsTable" class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Passo</th>
                            <th>Ativo</th>
                            <th width=1>Editar</th>
                            <th width=1>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($units as $unit)
                            <tr>
                                <td>{{ $unit->name }}</td>
                                <td>{{ $unit->step }}</td>
                                <td>{{ $unit->active ? 'Sim' : 'Não' }}</td>
                                <td class="align-middle" style="white-space: nowrap">
                                    <a href="{{ route('admin.units.edit', $unit->id) }}"
                                        class="btn btn-primary btn-sm rounded-pill">
                                        <i class="fas fa-edit"></i>
                                        Editar
                                    </a>
                                </td>
                                <td class="align-middle" style="white-space: nowrap">
                                    <form action="{{ route('admin.units.destroy', $unit->id) }}" method="POST">
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
        {{ $units->links() }}
    </div>
@endsection

@push('styles')
    <style></style>
@endpush

@push('scripts')
    <script></script>
@endpush

