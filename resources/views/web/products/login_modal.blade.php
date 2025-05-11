<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#loginModal">
    Adicionar ao carrinho
</button>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginModalLabel">
                    Faça login antes de continuar
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('auth.login_action') }}" method="POST" id="login-form">
                    @csrf
                    <input type="hidden" name="url" value="{{ url()->current() }}">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <p class="text-center">Ainda não possui uma conta? <a href="{{ route('auth.register') }}"
                            class="text-decoration-none">Registre-se</a></p>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="login-form" class="btn btn-primary">Continuar</button>
            </div>
        </div>
    </div>
</div>
