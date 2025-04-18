<div class="row">
    {{-- name --}}
    <div class="mb-3 col-md-6">
        <label for="name" class="form-label">Nome da Unidade</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
            id="name" placeholder="Digite o nome da unidade" value="{{ old('name', $unit->name ?? '') }}"
            autocomplete="off">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row">
    {{-- step --}}
    <div class="mb-3 col-md-6">
        <label for="step" class="form-label">Passo da Unidade</label>
        <input type="integer" class="form-control {{ $errors->has('step') ? 'is-invalid' : '' }}" name="step"
            id="step" placeholder="Digite o passo da unidade" value="{{ old('step', $unit->step ?? '') }}"
            autocomplete="off">
        @error('step')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
@isset($unit)
    <div class="row">
        {{-- active --}}
        <div class="mb-3 col-md-6">
            <label for="active" class="form-label">Ativo?</label>
            <select name="active" id="active" class="form-select {{ $errors->has('active') ? 'is-invalid' : '' }}">
                <option value="1" {{ old('active', $unit->active ?? true) == 1 ? 'selected' : '' }}>Sim</option>
                <option value="0" {{ old('active', $unit->active ?? true) == 0 ? 'selected' : '' }}>Não</option>
            </select>
            @error('active')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
@endisset

{{-- botão salvar/atualizar --}}
<div class="mb-3">
    <button type="submit" class="btn btn-primary rounded-pill">
        <i class="fas fa-save"></i>
        {{ isset($unit) ? 'Atualizar' : 'Salvar' }}
    </button>
</div>

