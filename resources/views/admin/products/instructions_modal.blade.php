<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm rounded-pill" data-bs-toggle="modal"
    data-bs-target="#instructionModal">
    <i class="fas fa-book-open"></i>
    Instruções
</button>

<!-- Modal -->
<div class="modal fade" id="instructionModal" tabindex="-1" aria-labelledby="instructionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="instructionModalLabel">Vincular instruções</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.products.instructions.update', $product) }}" method="POST"
                    id="instruction-form">
                    @csrf
                    @method('PUT')

                    @forelse ($instructions as $instruction)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{ $instruction->id }}"
                                id="instruction-{{ $instruction->id }}" name="instructions[]"
                                @if ($product->instructions->contains($instruction->id)) checked @endif>
                            <label class="form-check-label" for="instruction-{{ $instruction->id }}">
                                {{ $instruction->name }}
                            </label>
                        </div>
                    @empty
                        <p class="text-muted">Nenhuma instrução cadastrada.</p>
                    @endforelse

                </form>
            </div>
            <div class="modal-footer">
                <a class="btn btn-success btn-sm rounded-pill" href="{{ route('admin.instructions.create') }}">
                    <i class="fas fa-plus"></i>
                    Cadastrar nova instrução
                </a>
                <button type="button" class="btn btn-sm btn-secondary rounded-pill" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-sm btn-primary rounded-pill" form="instruction-form">Salvar</button>
            </div>
        </div>
    </div>
</div>
