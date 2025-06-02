@extends('web.layouts.client-panel.default')
@section('title', 'Pedidos')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Meus Pedidos</h3>
                </div>
                <hr>
                <div class="table-responsive">
                    <table id="ordersTable" class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Quantidade de Itens</th>
                                <th>Ativo</th>
                                <th width=1>Consultar</th>
                                {{-- <th width=1>Editar</th>
                                <th width=1>Excluir</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                                <tr>
                                    <td>{{ $order->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $order->products->count() }}</td>
                                    <td>{{ $order->active ? 'Sim' : 'Não' }}</td>
                                    <td class="align-middle" style="white-space: nowrap">
                                        <a href="{{ route('client-area.orders.show', $order->id) }}"
                                            class="btn btn-primary btn-sm rounded-pill">
                                            <i class="fas fa-eye"></i>
                                            Consultar
                                        </a>
                                    </td>
                                    {{-- <td class="align-middle" style="white-space: nowrap">
                                        <a href="{{ route('client-area.orders.edit', $order->id) }}"
                                            class="btn btn-primary btn-sm rounded-pill">
                                            <i class="fas fa-edit"></i>
                                            Editar
                                        </a>
                                    </td>
                                    <td class="align-middle" style="white-space: nowrap">
                                        <form action="{{ route('client-area.orders.destroy', $order->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="js-delete-button btn btn-danger btn-sm rounded-pill">
                                                <i class="fas fa-trash"></i>
                                                Excluir
                                            </button>
                                        </form>
                                    </td> --}}
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
        {{ $orders->links() }}
    </div>

@endsection

@push('styles')
    <style></style>
@endpush

@push('script')
    <script></script>
@endpush
