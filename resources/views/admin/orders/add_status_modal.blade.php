@props(['statuses'])

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#addStatusModal">
    <i class="fas fa-plus"></i>
    Adicionar Status
</button>

<!-- Modal -->
<div class="modal fade" id="addStatusModal" tabindex="-1" aria-labelledby="addStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addStatusModalLabel">Adicionar Status</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.orders.update', $order) }}" method="POST" id="status-form">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="">Selecione um status</option>
                            @foreach ($statuses as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="observation" class="form-label">Observação</label>
                        <textarea name="observation" id="observation" class="form-control"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary rounded-pill"
                    data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-sm btn-primary rounded-pill" form="status-form">Salvar</button>
            </div>
        </div>
    </div>
</div>
