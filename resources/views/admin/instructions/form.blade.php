<div class="row">
    {{-- name --}}
    <div class="mb-3 col-md-6">
        <label for="name" class="form-label">Nome da Instrução</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
            id="name" placeholder="Digite o nome da instrução" value="{{ old('name', $instruction->name ?? '') }}"
            autocomplete="off">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
@isset($instruction)
    <div class="row">
        {{-- active --}}
        <div class="mb-3 col-md-6">
            <label for="active" class="form-label">Ativo?</label>
            <select name="active" id="active" class="form-select {{ $errors->has('active') ? 'is-invalid' : '' }}">
                <option value="1" {{ old('active', $instruction->active ?? true) == 1 ? 'selected' : '' }}>Sim</option>
                <option value="0" {{ old('active', $instruction->active ?? true) == 0 ? 'selected' : '' }}>Não</option>
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
        {{ isset($instruction) ? 'Atualizar' : 'Salvar' }}
    </button>
</div>

