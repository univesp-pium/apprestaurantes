<div class="row">
    {{-- title --}}
    <div class="mb-3 col-md-6">
        <label for="title" class="form-label">Título</label>
        <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title"
            id="title" placeholder="Digite o título" value="{{ old('title', $product->title ?? '') }}"
            autocomplete="off">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- category_id --}}
    <div class="mb-3 col-md-3">
        <label for="category_id" class="form-label">Categoria</label>
        <select name="category_id" id="category_id"
            class="form-select {{ $errors->has('category_id') ? 'is-invalid' : '' }}">
            <option value="">Selecione uma opção</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- unit_id --}}
    <div class="mb-3 col-md-3">
        <label for="unit_id" class="form-label">Unidade</label>
        <select name="unit_id" id="unit_id" class="form-select {{ $errors->has('unit_id') ? 'is-invalid' : '' }}">
            <option value="">Selecione uma opção</option>
            @foreach ($units as $unit)
                <option value="{{ $unit->id }}"
                    {{ old('unit_id', $product->unit_id ?? '') == $unit->id ? 'selected' : '' }}>
                    {{ $unit->name }}
                </option>
            @endforeach
        </select>
        @error('unit_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>


{{-- description --}}
<div class="row">
    <div class="mb-3 col-md-12">
        <label for="description" class="form-label">Descrição</label>
        <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description"
            id="description" placeholder="Digite a descrição" style="min-height: 150px;">{{ old('description', $product->description ?? '') }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>


<div class="row">
    {{-- price --}}
    <div class="mb-3 col-md-3">
        <label for="price" class="form-label">Preço</label>
        <div class="input-group">
            <span class="input-group-text">R$</span>
            <input type="text" class="form-control js_mask_money {{ $errors->has('price') ? 'is-invalid' : '' }}"
                name="price" id="price" placeholder="Digite o preço"
                value="{{ old('price', number_format($product->price, 2, ',', '.') ?? '') }}" autocomplete="off">
        </div>
        @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- quantity --}}
    <div class="mb-3 col-md-3">
        <label for="quantity" class="form-label">Quantidade</label>
        <input type="number" class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" name="quantity"
            id="quantity" placeholder="Digite a quantidade" value="{{ old('quantity', $product->quantity ?? 0) }}"
            autocomplete="off">
        @error('quantity')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- discount --}}
    <div class="mb-3 col-md-3">

        <label for="discount" class="form-label">Desconto</label>
        <div class="input-group">
            <span class="input-group-text">R$</span>
            <input type="text" class="form-control js_mask_money {{ $errors->has('discount') ? 'is-invalid' : '' }}"
                name="discount" id="discount" placeholder="Digite o preço"
                value="{{ old('discount', number_format($product->discount, 2, ',', '.') ?? '') }}" autocomplete="off">
        </div>
        @error('discount')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- is_addicional --}}
    <div class="mb-3 col-md-3">
        <label for="is_addicional" class="form-label">Adicional?</label>
        <select name="is_addicional" id="is_addicional"
            class="form-select {{ $errors->has('is_addicional') ? 'is-invalid' : '' }}">
            <option value="1" {{ old('is_addicional', $product->is_addicional ?? false) == 1 ? 'selected' : '' }}>
                Sim</option>
            <option value="0" {{ old('is_addicional', $product->is_addicional ?? false) == 0 ? 'selected' : '' }}>
                Não</option>
        </select>
        @error('is_addicional')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

@isset($product)
    <div class="row">
        <div class="col-md-6">
            {{-- active --}}
            <div class="mb-3">
                <label for="active" class="form-label">Ativo?</label>
                <select name="active" id="active" class="form-select {{ $errors->has('active') ? 'is-invalid' : '' }}">
                    <option value="1" {{ old('active', $product->active ?? true) == 1 ? 'selected' : '' }}>Sim
                    </option>
                    <option value="0" {{ old('active', $product->active ?? true) == 0 ? 'selected' : '' }}>Não
                    </option>
                </select>
                @error('active')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
@endisset

{{-- botão salvar/atualizar --}}
<div class="mb-3 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary rounded-pill">
        <i class="fas fa-save"></i>
        {{ isset($product) ? 'Atualizar' : 'Salvar' }}
    </button>
</div>
