@extends('web.layouts.default')
@section('title', 'Carrinho')
@section('content')

    <section class="cart">
        <div class="container">
            <h2 class="text-danger text-center my-4">Seu Pedido</h2>
            <div id="cart-items-container"></div>
            <h3 class="mb-3">Produtos Adicionais</h3>
            <div id="related-items-container"></div>
            <div class="mb-3">
                <input type="tel" class="form-control d-inline-block w-auto" id="whatsappNumber" value="(15) 99173-9991"
                    disabled placeholder="(00) 00000-0000">
                <button class="btn btn-danger ms-2" id="editWhatsappBtn" onclick="toggleEdit()">Editar</button>
            </div>
            <p class="text-muted">Insira seu n mero para ser avisado quando o pedido estiver pronto.</p>
            <div class="text-end mb-4">
                <h4>Total do Pedido: <span class="text-danger fw-bold" id="totalPrice">R$ 0,00</span></h4>
            </div>
            <div class="text-center">
                <button class="btn btn-danger btn-lg">Finalizar Compra</button>
            </div>
        </div>
    </section>

@endsection
