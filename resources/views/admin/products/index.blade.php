@extends('admin.layouts.default')
@section('title', 'Produtos')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Produtos</h3>

                    <div>
                        @include('admin.products.search')

                        <a href="{{ route('admin.products.create') }}" class="btn btn-success rounded-pill">
                            <i class="fas fa-plus"></i>
                            Adicionar
                        </a>
                    </div>
                </div>
                <hr>
                <div class="table-responsive">
                    <table id="productsTable" class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Categoria</th>
                                <th>Quantidade</th>
                                <th>Ativo</th>
                                <th width=1>Editar</th>
                                <th width=1>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td>{{ $product->title }}</td>
                                    <td>R$ {{ $product->price }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->active ? 'Sim' : 'Não' }}</td>
                                    <td class="align-middle" style="white-space: nowrap">
                                        <a href="{{ route('admin.products.edit', $product->id) }}"
                                            class="btn btn-primary btn-sm rounded-pill">
                                            <i class="fas fa-edit"></i>
                                            Editar
                                        </a>
                                    </td>
                                    <td class="align-middle" style="white-space: nowrap">
                                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
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
        {{ $products->links() }}
    </div>
@endsection

@push('styles')
    <style></style>
@endpush

@push('scripts')
    <script></script>
@endpush
