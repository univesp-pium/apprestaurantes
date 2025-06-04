<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('assets/web/css/default.css') }}">
    <title>@yield('title', 'Açougue Premium')</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-danger">
            <div class="container">
                <a class="navbar-brand text-light fw-bold" href="{{ route('home') }}">
                    Açougue Premium
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        @if (!Auth::guard('client')->check())
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('auth.login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('auth.register') }}">Registro</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Olá, {{ Auth::guard('client')->user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="{{ route('client-area.dashboard.index') }}">Minha
                                            Conta</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('auth.logout_action') }}">Logout</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('client-area.cart.index') }}">
                                    <i class="fa fa-shopping-cart d-none d-lg-inline" aria-hidden="true"></i>
                                    <span class="d-inline d-lg-none">Carrinho</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
        @include('web.components.whatsapp', ['number' => '5511999999999'])
    </main>

    <footer class="bg-danger text-white text-center py-4">
        <p class="mb-0">&copy; 2025 Açougue Premium. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/imask"></script>
    @vite('resources/js/app.js')
    @stack('scripts')
    <script src="{{ asset('assets/web/js/default.js') }}"></script>
    <style>
        main {
            min-height: calc(100vh - 128px);
        }
    </style>
</body>

</html>
