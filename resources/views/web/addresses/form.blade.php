<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nickname">Apelido</label>
            <input type="text" class="form-control @error('nickname') is-invalid @enderror" id="nickname"
                name="nickname" placeholder="Digite o apelido. Ex: Minha casa"
                value="{{ old('nickname', $address->nickname ?? '') }}">
            @error('nickname')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" class="form-control @error('cep') is-invalid @enderror" id="cep" name="cep"
                placeholder="Digite o CEP" value="{{ old('cep', $address->cep ?? '') }}">
            @error('cep')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="neighborhood">Bairro</label>
            <input type="text" class="form-control @error('neighborhood') is-invalid @enderror" id="neighborhood"
                name="neighborhood" placeholder="Digite o bairro"
                value="{{ old('neighborhood', $address->neighborhood ?? '') }}">
            @error('neighborhood')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="city">Cidade</label>
            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city"
                placeholder="Digite a cidade" value="{{ old('city', $address->city ?? '') }}">
            @error('city')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="state">Estado</label>
            <input type="text" class="form-control @error('state') is-invalid @enderror" id="state"
                name="state" placeholder="Digite o estado" value="{{ old('state', $address->state ?? '') }}">
            @error('state')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="street">Rua</label>
            <input type="text" class="form-control @error('street') is-invalid @enderror" id="street"
                name="street" placeholder="Digite a rua" value="{{ old('street', $address->street ?? '') }}">
            @error('street')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="number">Número</label>
            <input type="text" class="form-control @error('number') is-invalid @enderror" id="number"
                name="number" placeholder="Digite o número" value="{{ old('number', $address->number ?? '') }}">
            @error('number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="complement">Complemento</label>
            <input type="text" class="form-control @error('complement') is-invalid @enderror" id="complement"
                name="complement" placeholder="Digite o complemento"
                value="{{ old('complement', $address->complement ?? '') }}">
            @error('complement')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="reference_point">Ponto de Referência</label>
            <input type="text" class="form-control @error('reference_point') is-invalid @enderror"
                id="reference_point" name="reference_point" placeholder="Digite o ponto de referência"
                value="{{ old('reference_point', $address->reference_point ?? '') }}">
            @error('reference_point')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

{{-- Se o cliente estiver disponivel (edit) e possuir mais de um endereço --}}
@if (isset($client) && Auth::guard('client')->user()->addresses->count() > 1)
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="form-check">
                    <input type="hidden" name="is_main_address" value="0">
                    <input class="form-check-input" type="checkbox" value="1" id="is_main_address"
                        name="is_main_address"
                        {{ old('is_main_address', $address->is_main_address ?? false) ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_main_address">
                        Endereço principal
                    </label>
                </div>
            </div>
        </div>
    </div>
@elseif(!isset($client) && Auth::guard('client')->user()->addresses->count() > 0)
    <input type="hidden" name="is_main_address" value="0">
@else
    {{-- Cadastro do primeiro endereço --}}
    <input type="hidden" name="is_main_address" value="1">
@endif

<div class="mb-3">
    <button type="submit" class="btn btn-primary rounded-pill">
        <i class="fas fa-save"></i>
        {{ isset($address) ? 'Atualizar' : 'Salvar' }}
    </button>
</div>
