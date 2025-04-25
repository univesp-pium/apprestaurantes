<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Açougue Premium</title>

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/web/css/login.css') }}">

</head>

<body>
    <div class="container">
        <!-- Cabeçalho -->
        <header class="header">
            <nav class="user-links">
                <a href="{{ route('home') }}" class="user-link">VOLTAR À LOJA</a>
            </nav>

            <a href="{{ route('home') }}" class="logo">
                <h1>Açougue Premium</h1>
            </a>
        </header>

        <!-- Conteúdo Principal - Login -->
        <main class="auth-section">
            <div class="auth-card">
                <h2 class="auth-title">Login</h2>

                <form id="loginForm" action="{{ route('auth.login_action') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" id="email"
                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" required
                            placeholder="seu@email.com" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" id="password"
                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password"
                            required placeholder="••••••••">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-sign-in-alt"></i> Entrar
                        </button>
                    </div>
                </form>

                <div class="auth-footer">
                    <p>Não tem uma conta? <a href="{{ route('auth.register') }}" class="auth-link">Cadastre-se</a></p>
                    <p><a href="#" class="auth-link">Esqueceu sua senha?</a></p>
                </div>
            </div>
        </main>
    </div>

    <!-- Rodapé -->
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Sobre Nós</h3>
                <ul>
                    <li><a href="#">Nossa História</a></li>
                    <li><a href="#">Qualidade</a></li>
                    <li><a href="#">Fazendas Parceiras</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Atendimento</h3>
                <ul>
                    <li><a href="#">Central de Ajuda</a></li>
                    <li><a href="#">Política de Entrega</a></li>
                    <li><a href="#">Fale Conosco</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Institucional</h3>
                <ul>
                    <li><a href="#">Termos de Uso</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Contato</h3>
                <ul>
                    <li>Sorocaba/SP</li>
                    <li>contato@acouguepremium.com.br</li>
                    <li>(15) 3333-3333</li>
                </ul>

                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Açougue Premium. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>
