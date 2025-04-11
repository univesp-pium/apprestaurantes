<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Açougue Premium - Carnes Selecionadas</title>
    <link rel="stylesheet" href="{{ asset('web/assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="header">
            <nav class="user-links">
                <a href="#">LOGIN E CADASTRO</a>
                <a href="#">ACOMPANHAMENTO DE PEDIDOS</a>
            </nav>
            <img src="https://placehold.co/50x50" alt="Carrinho de compras" class="cart-icon">
        </header>

        <!-- Menu de Categorias -->
        <div class="category-menu">
            <button class="category-btn active">CARNE DE PANELA</button>
            <button class="category-btn">RECHEADA</button>
            <button class="category-btn">CARNE MOÍDA</button>
            <button class="category-btn">CHURRASCO</button>
            <button class="category-btn">BASSI</button>
            <button class="category-btn">CARNE DE ASSAR</button>
            <button class="category-btn">CARNE PARA BIFES</button>
            <button class="category-btn">FRANGO ASSADO</button>
            <button class="category-btn">SUÍNOS</button>
            <button class="category-btn">AVES</button>
        </div>

        <main>
            <section class="featured-section">
                <h2 class="section-title">DESTAQUES DA SEMANA</h2>
            </section>

            <div class="product-grid">
                <!-- Produto 1 -->

                @foreach ($products as $product)
                    <article class="product-card">
                        <img src="https://placehold.co/200x200" alt="Contra Filé para churrasco" class="product-image">
                        <div class="product-info">
                            <h3 class="product-name">{{ $product['name'] }} - R$29,99</h3>
                            <p class="product-description">
                                Carne macia e suculenta ideal para churrascos e grelhados.
                            </p>

                            <div class="product-options">
                                <div class="option-group">
                                    <p class="option-title">Amaciar?</p>
                                    <div class="option-buttons">
                                        <button class="btn btn-secondary">SIM</button>
                                        <button class="btn btn-secondary">NÃO</button>
                                    </div>
                                </div>

                                <div class="option-group">
                                    <p class="option-title">Embalagem à vácuo?</p>
                                    <div class="option-buttons">
                                        <button class="btn btn-secondary">SIM</button>
                                        <button class="btn btn-secondary">NÃO</button>
                                    </div>
                                </div>

                                <div class="option-group">
                                    <p class="option-title">Dividir em mais embalagens?</p>
                                    <div class="option-buttons">
                                        <button class="btn btn-secondary">SIM</button>
                                        <button class="btn btn-secondary">NÃO</button>
                                    </div>
                                </div>

                                <div class="option-group">
                                    <p class="option-title">Tipo de corte</p>
                                    <select class="btn btn-secondary">
                                        <option value="">Selecione</option>
                                        <option>Bifes finos</option>
                                        <option>Bifes grossos</option>
                                        <option>Peça inteira</option>
                                    </select>
                                </div>

                                <div class="option-group">
                                    <p class="option-title">Tempero</p>
                                    <select class="btn btn-secondary">
                                        <option value="">Selecione</option>
                                        <option>Sem tempero</option>
                                        <option>Temperado</option>
                                        <option>Especial da casa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="quantity-control">
                                <button class="quantity-btn">-</button>
                                <span>1</span>
                                <button class="quantity-btn">+</button>
                            </div>

                            <a href="produtos/detalhe"
                                class="btn btn-primary add-to-cart" data-product="Contra Filé 500g - R$29,99"
                                data-image="churrasco-10.png">ADICIONAR AO CARRINHO</a href="#">
                        </div>
                    </article>
                @endforeach


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
                    <li><a href="#">Sustentabilidade</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Atendimento</h3>
                <ul>
                    <li><a href="#">Central de Ajuda</a></li>
                    <li><a href="#">Política de Entrega</a></li>
                    <li><a href="#">Trocas e Devoluções</a></li>
                    <li><a href="#">Fale Conosco</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Institucional</h3>
                <ul>
                    <li><a href="#">Termos de Uso</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                    <li><a href="#">Trabalhe Conosco</a></li>
                    <li><a href="#">Fornecedores</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Contato</h3>
                <ul>
                    <li>Rua das Carnes, 123</li>
                    <li>Centro, São Paulo - SP</li>
                    <li>CEP: 01000-000</li>
                    <li>contato@acouguepremium.com.br</li>
                    <li>(11) 9999-9999</li>
                </ul>

                <div class="social-links">
                    <a href="#" aria-label="Facebook"><svg width="20" height="20" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                        </svg></a>
                    <a href="#" aria-label="Instagram"><svg width="20" height="20" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                        </svg></a>
                    <a href="#" aria-label="WhatsApp"><svg width="20" height="20" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Açougue Premium. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Modal de Opções Mobile -->
    <div class="options-modal" id="optionsModal">
        <div class="options-container">
            <div class="modal-header">
                <h3 class="modal-title">Personalize seu pedido</h3>
                <span class="close-modal">&times;</span>
            </div>

            <div class="modal-product-info">
                <img src="" alt="" class="modal-product-image" id="modalProductImage">
                <div class="modal-product-details">
                    <h4 id="modalProductName"></h4>
                    <div class="quantity-control">
                        <button class="quantity-btn">-</button>
                        <span>1</span>
                        <button class="quantity-btn">+</button>
                    </div>
                </div>
            </div>

            <!-- Passo 1: Opções básicas -->
            <div class="modal-step active" id="step1">
                <div class="option-group">
                    <p class="option-title">Amaciar?</p>
                    <div class="option-buttons">
                        <button class="btn btn-secondary">SIM</button>
                        <button class="btn btn-secondary">NÃO</button>
                    </div>
                </div>

                <div class="option-group">
                    <p class="option-title">Embalagem à vácuo?</p>
                    <div class="option-buttons">
                        <button class="btn btn-secondary">SIM</button>
                        <button class="btn btn-secondary">NÃO</button>
                    </div>
                </div>

                <div class="option-group">
                    <p class="option-title">Dividir em mais embalagens?</p>
                    <div class="option-buttons">
                        <button class="btn btn-secondary">SIM</button>
                        <button class="btn btn-secondary">NÃO</button>
                    </div>
                </div>

                <div class="modal-navigation">
                    <button class="btn btn-secondary" disabled>Voltar</button>
                    <button class="btn btn-primary next-step" data-next="step2">Próximo</button>
                </div>
            </div>

            <!-- Passo 2: Tipo de corte -->
            <div class="modal-step" id="step2">
                <div class="option-group">
                    <p class="option-title">Tipo de corte</p>
                    <select class="btn btn-secondary">
                        <option value="">Selecione</option>
                        <option>Bifes finos</option>
                        <option>Bifes grossos</option>
                        <option>Peça inteira</option>
                    </select>
                </div>

                <div class="modal-navigation">
                    <button class="btn btn-secondary prev-step" data-prev="step1">Voltar</button>
                    <button class="btn btn-primary next-step" data-next="step3">Próximo</button>
                </div>
            </div>

            <!-- Passo 3: Tempero -->
            <div class="modal-step" id="step3">
                <div class="option-group">
                    <p class="option-title">Tempero</p>
                    <select class="btn btn-secondary">
                        <option value="">Selecione</option>
                        <option>Sem tempero</option>
                        <option>Temperado</option>
                        <option>Especial da casa</option>
                    </select>
                </div>

                <div class="modal-navigation">
                    <button class="btn btn-secondary prev-step" data-prev="step2">Voltar</button>
                    <button class="btn btn-primary" id="confirmPurchase">Confirmar Compra</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('web/assets/js/script.js') }}"></script>
</body>

</html>
