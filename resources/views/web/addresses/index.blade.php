@extends('web.layouts.client-panel.default')
@section('title', 'Endereços')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Endereços</h3>

                    <div>
                        <a href="{{ route('client-area.addresses.create') }}" class="btn btn-success rounded-pill">
                            <i class="fas fa-plus"></i>
                            Adicionar
                        </a>
                    </div>
                </div>
                <hr>
                <div class="table-responsive">
                    <table id="addressesTable" class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Bairro</th>
                                <th>Rua</th>
                                <th>Número</th>
                                <th>Endereço principal</th>
                                <th width=1>Editar</th>
                                <th width=1>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($addresses as $address)
                                <tr>
                                    <td>{{ $address->nickname }}</td>
                                    <td>{{ $address->neighborhood }}</td>
                                    <td>{{ $address->street }}</td>
                                    <td>{{ $address->number }}</td>
                                    <td>{{ $address->is_main_address ? 'Sim' : 'Não' }}</td>
                                    <td class="align-middle" style="white-space: nowrap">
                                        <a href="{{ route('client-area.addresses.edit', $address->id) }}"
                                            class="btn btn-primary btn-sm rounded-pill">
                                            <i class="fas fa-edit"></i>
                                            Editar
                                        </a>
                                    </td>
                                    <td class="align-middle" style="white-space: nowrap">
                                        <form action="{{ route('client-area.addresses.destroy', $address->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="js-delete-button btn btn-danger btn-sm rounded-pill">
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
        </div>
    </div>

@endsection

@push('styles')
    <style></style>
@endpush

@push('scripts')
    <script></script>
@endpush
