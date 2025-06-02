@extends('admin.layouts.default')
@section('title', 'Pedidos')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3>Pedidos</h3>
                <hr>
                <div class="table-responsive">
                    <table id="ordersTable" class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th>Data e Hora</th>
                                <th>Cliente</th>
                                <th>Quantidade de Itens</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th width=1>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                                <tr>
                                    <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                                    <td>{{ $order->client->name }}</td>
                                    <td>{{ $order->products->count() }}</td>
                                    <td>R$ {{ number_format($order->total, 2, ',', '.') }}</td>
                                    <td>
                                        <i class="fa-solid fa-circle text-secondary"></i>
                                    </td>
                                    <td class="align-middle" style="white-space: nowrap">
                                        <a href="{{ route('admin.orders.edit', $order->id) }}"
                                            class="btn btn-primary btn-sm rounded-pill">
                                            <i class="fas fa-edit"></i>
                                            Editar
                                        </a>
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

@push('scripts')
    <script></script>
@endpush

@push('styles')
    <style></style>
@endpush
