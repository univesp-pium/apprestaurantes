<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Açougue Premium</title>

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('web/assets/css/register.css') }}">

</head>

<body>
    <div class="container">
        <!-- Cabeçalho -->
        <header class="header">
            <nav class="user-links">
                <a href="index.html" class="user-link">VOLTAR À LOJA</a>
            </nav>

            <a href="index.html" class="logo">
                <h1>Açougue Premium</h1>
            </a>
        </header>

        <!-- Conteúdo Principal - Cadastro -->
        <main class="auth-section">
            <div class="auth-card">
                <h2 class="auth-title">Criar Conta</h2>

                <form id="registerForm">
                    <div class="form-group">
                        <label for="fullName" class="form-label">Nome Completo</label>
                        <input type="text" id="fullName" class="form-control" required
                            placeholder="Seu nome completo">
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" id="email" class="form-control" required placeholder="seu@email.com">
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" id="password" class="form-control" required placeholder="••••••••">
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword" class="form-label">Confirmar Senha</label>
                        <input type="password" id="confirmPassword" class="form-control" required
                            placeholder="••••••••">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="street" class="form-label">Rua</label>
                            <input type="text" id="street" class="form-control" required
                                placeholder="Nome da rua">
                        </div>

                        <div class="form-group">
                            <label for="number" class="form-label">Número</label>
                            <input type="text" id="number" class="form-control" required placeholder="Nº">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="neighborhood" class="form-label">Bairro</label>
                        <input type="text" id="neighborhood" class="form-control" required placeholder="Seu bairro">
                    </div>

                    <div class="form-group">
                        <label for="complement" class="form-label">Complemento</label>
                        <input type="text" id="complement" class="form-control" placeholder="Apto, bloco, etc.">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="city" class="form-label">Cidade</label>
                            <input type="text" id="city" class="form-control" value="Sorocaba" readonly>
                        </div>

                        <div class="form-group">
                            <label for="state" class="form-label">Estado</label>
                            <input type="text" id="state" class="form-control" value="SP" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-user-plus"></i> Criar Conta
                        </button>
                    </div>
                </form>

                <div class="auth-footer">
                    <p>Já tem uma conta? <a href="login.html" class="auth-link">Faça login</a></p>
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

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Validação simples de senha
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                alert('As senhas não coincidem!');
                return;
            }

            // Adicionar a lógica de cadastro
            alert('Cadastro realizado com sucesso! Redirecionando...');
            window.location.href = 'index.html';
        });
    </script>
</body>

</html>
