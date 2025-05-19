@extends('web.layouts.default')
@section('title', 'Carrinho')
@section('content')

    <section class="cart">
        <div class="container">
            <h2 class="text-danger text-center my-5">Seu Pedido foi enviado com sucesso</h2>
            <div id="cart-items-container"></div>

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    {{-- Pedido enviado --}}
                    <div class="alert alert-secondary d-flex align-items-center justify-content-between" role="alert">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-solid fa-check-double"></i>
                            <div>
                                Pedido enviado
                            </div>
                        </div>
                        <div>
                            20/12/2022 - 20:00
                        </div>
                    </div>

                    {{-- Pedido enviado --}}
                    <div class="alert alert-secondary d-flex align-items-center justify-content-between" role="alert">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-solid fa-check-double"></i>
                            <div>
                                Pedido processado
                            </div>
                        </div>
                        <div>
                            20/12/2022 - 20:15
                        </div>
                    </div>

                    <div class="d-flex justify-content-center align-items-center flex-column mt-4">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <p class="mt-3">Pedido ainda em processamento ...</p>
                    </div>


                </div>
            </div>



        </div>
    </section>

@endsection
