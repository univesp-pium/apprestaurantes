@extends('web.layouts.default')
@section('title', 'Registro')
@section('content')
<section class="bg-light d-flex justify-content-center align-items-center min-vh-100">
  <div class="card p-4 shadow border-0 rounded-4 w-100" style="max-width: 480px;">
    <h2 class="text-center fw-bold mb-4">Criar Conta</h2>

    <form action="{{ route('auth.register_action') }}" method="post">
      @csrf

      <div class="mb-3">
        <label for="name" class="form-label">Nome completo</label>
        <input type="text" id="name" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
          value="Seu nome" placeholder="Seu nome completo" required>
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" id="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
          value="Seu email" placeholder="seu@email.com" required>
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">Telefone</label>
        <input type="tel" id="phone" name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
          value="Digite seu celular" placeholder="(15) 99999-9999" required>
        @error('phone')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" id="password" name="password"
          class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
          placeholder="••••••••" required>
        @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirmar Senha</label>
        <input type="password" id="password_confirmation" name="password_confirmation"
          class="form-control" placeholder="••••••••" required>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-success">
          <i class="fas fa-user-plus me-2"></i> Registrar
        </button>
      </div>
    </form>

    <div class="text-center mt-4">
      <p class="mb-0">Já tem uma conta?
        <a href="{{ route('auth.login') }}" class="text-decoration-none text-primary">Entrar</a>
      </p>
    </div>
  </div>
</section>
@endsection

@push('styles')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
@endpush

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endpush
