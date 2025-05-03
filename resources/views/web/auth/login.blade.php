@extends('web.layouts.default')
@section('title', 'Login')
@section('content')

<!-- Seção de Login -->
  <section class="bg-light min-vh-100 d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-5">
          <div class="card shadow p-4 border-0 rounded-4">
            <!-- Título -->
            <h2 class="text-center fw-semibold mb-4">Login</h2>

            <!-- Formulário -->
            <form id="loginForm" action="{{ route('auth.login_action') }}" method="post">
              @csrf

              <!-- E-mail -->
              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" id="email" name="email"
                  class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                  placeholder="seu@email.com" required value="Seu email">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Senha -->
              <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" id="password" name="password"
                  class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                  placeholder="••••••••" required>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Botão -->
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                  <i class="fas fa-sign-in-alt me-2"></i> Entrar
                </button>
              </div>
            </form>

            <!-- Links adicionais -->
            <div class="mt-4 text-center">
              <p class="mb-1">Não tem uma conta?
                <a href="{{ route('auth.register') }}" class="text-decoration-none text-primary fw-semibold">Cadastre-se</a>
              </p>
              <p>
                <a href="#" class="text-decoration-none text-primary">Esqueceu sua senha?</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('styles')
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 @endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endpush
