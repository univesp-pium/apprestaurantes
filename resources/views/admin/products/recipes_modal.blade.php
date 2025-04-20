<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#recipeModal">
    <i class="fas fa-utensils"></i>
    Receitas
</button>

<!-- Modal -->
<div class="modal fade" id="recipeModal" tabindex="-1" aria-labelledby="recipeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="recipeModalLabel">Vincular receitas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.products.recipes.update', $product) }}" method="POST" id="recipe-form">
                    @csrf
                    @method('PUT')

                    @forelse ($recipes as $recipe)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{ $recipe->id }}"
                                id="recipe-{{ $recipe->id }}" name="recipes[]"
                                @if ($product->recipes->contains($recipe->id)) checked @endif>
                            <label class="form-check-label" for="recipe-{{ $recipe->id }}">
                                {{ $recipe->name }}
                            </label>
                        </div>
                    @empty
                        <p class="text-muted">Nenhuma instrução cadastrada.</p>
                    @endforelse

                </form>
            </div>
            <div class="modal-footer">
                <a class="btn btn-success btn-sm rounded-pill" href="{{ route('admin.recipes.create') }}">
                    <i class="fas fa-plus"></i>
                    Cadastrar nova receita
                </a>
                <button type="button" class="btn btn-sm btn-secondary rounded-pill"
                    data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-sm btn-primary rounded-pill"
                    form="recipe-form">Salvar</button>
            </div>
        </div>
    </div>
</div>
