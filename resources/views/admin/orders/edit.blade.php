@extends('admin.layouts.default')
@section('title', 'Pedido')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Pedido - Editar</h3>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-primary rounded-pill">
                        <i class="fas fa-arrow-left"></i>
                        Voltar
                    </a>
                </div>
                <hr>
                <div class="table-responsive">
                    <table id="ordersTable" class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th>Imagem</th>
                                <th>Nome</th>
                                <th>Quantidade</th>
                                <th>Preço</th>
                                <th>Subtotal</th>
                                <th>Observações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($order->products->count() > 0)
                                @foreach ($order->products as $product)
                                    <tr>
                                        <td>
                                            @if ($product->images->count() > 0)
                                                <img src="{{ Storage::url($product->images->first()->image) }}"
                                                    class="img-fluid rounded" alt="Produto 1" width="30" height="20"
                                                    alt="{{ $product->title }}">
                                            @else
                                                <img src="https://placehold.co/30x20" class="img-fluid rounded"
                                                    alt="Produto 1" width="30" height="20"
                                                    alt="{{ $product->title }}">
                                            @endif
                                        </td>
                                        <td>{{ $product->title }}</td>
                                        <td>
                                            {{ number_format($product->pivot->quantity, 3, ',', '.') }}
                                            {{ $product->unit->abbreviation }}
                                        </td>
                                        <td>
                                            R$ {{ number_format($product->pivot->price, 2, ',', '.') }} /
                                            {{ $product->unit->abbreviation }}
                                        </td>
                                        <td>
                                            R$
                                            {{ number_format($product->pivot->quantity * $product->pivot->price, 2, ',', '.') }}
                                        </td>
                                        <td>
                                            {{ Str::limit(50, $product->pivot->observations) }}
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        Total:
                                    </td>
                                    <td>
                                        <strong>
                                            R$ {{ number_format($order->total, 2, ',', '.') }}
                                        </strong>
                                    </td>
                                    <td></td>
                                </tr>
                            @else
                                <tr>
                                    <td colspan="100%" class="text-center">Nenhuma registro cadastrado</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <section class="card mt-3">
                    <div class="card-header p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title">Status</h5>
                            @include('admin.orders.add_status_modal', ['statuses' => $statuses])
                        </div>
                    </div>
                    <div class="card-body">

                        @foreach ($order->statuses as $status)
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="card-title">{{ $status->name }}</h5>
                                    <p class="card-text">{{ $status->observation }}</p>
                                </div>
                            </div>
                            @if (!$loop->last)
                                <hr>
                            @endif
                        @endforeach

                    </div>
                </section>
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
