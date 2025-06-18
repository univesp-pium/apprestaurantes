@extends('web.layouts.client-panel.default')
@section('title', 'Pedido')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Acompanhar pedido</h3>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-primary rounded-pill">
                        <i class="fas fa-arrow-left"></i>
                        Voltar
                    </a>
                </div>
            </div>

            <hr class="my-4">

            <div class="col-12">
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
                                    <td colspan="3"></td>
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

            <hr class="my-4">

            <div class="col-12">
                @foreach ($order->statuses as $status)
                    <div class="alert alert-secondary d-flex align-items-center justify-content-between" role="alert">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-solid fa-check-double"></i>
                            <div>
                                {{ $status->name }}
                            </div>
                        </div>
                        <div>
                            {{ $status->created_at->format('d/m/Y - H:i') }}
                        </div>
                    </div>

                    @if (!$loop->last)
                        <hr>
                    @endif
                @endforeach

                <div class="d-flex justify-content-center align-items-center flex-column mt-4">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="mt-3">Pedido ainda em processamento ...</p>
                </div>

            </div>
        </div>
    </div>

@endsection

@push('styles')
    <style></style>
@endpush

@push('script')
    <script></script>
@endpush
