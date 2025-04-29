@extends('web.layouts.client-panel.default')
@section('title', 'Endereços')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Endereços - Cadastrar</h3>
                    <a href="{{ route('client-area.addresses.index') }}" class="btn btn-primary rounded-pill">
                        <i class="fas fa-arrow-left"></i>
                        Voltar
                    </a>
                </div>
                <hr>

                <form action="{{ route('client-area.addresses.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    @include('web.addresses.form')
                </form>

            </div>
        </div>
    </div>

@endsection

@push('styles')
    <style></style>
@endpush

@push('scripts')
    <script>
        let cep_input = document.querySelector('#cep');

        // Imask
        IMask(cep_input, {
            mask: '00000-000'
        });

        // Via Cep
        cep_input.addEventListener('blur', function() {
            let cep_number = cep_input.value.replace('-', '') ?? 0;
            if (cep_number.length < 8 && cep_input.value != '') {
                cep_input.value = '';
                alert('Digite um cep válido');
                cep_input.focus();
            }

            fetch(`https://viacep.com.br/ws/${cep_number}/json/`)
                .then(function(response) {
                    if (response.status != 200) {
                        alert('Erro ao localizar cep, tente novamente mais tarde!');
                    }
                    return response.json();
                })
                .then(function(json) {
                    if (json.erro) {
                        alert('Cep Não encontrado!');
                    }
                    document.querySelector('#neighborhood').value = json.bairro ?? '';
                    document.querySelector('#city').value = json.localidade ?? '';
                    document.querySelector('#state').value = json.estado ?? '';
                    document.querySelector('#street').value = json.logradouro ?? '';
                    document.querySelector('#number').focus();
                })

        })
    </script>
@endpush
