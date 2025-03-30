<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Açougue Online</title>
    <link rel="stylesheet" href="{{ asset('web/assets/css/products.css') }}">
</head>

<body>
    <div class="div">
        <div class="card-pio">
            <!-- Menu Principal -->
            <div class="menu-principal">
                <div class="items">
                    <div class="login-e-cadastro">LOGIN E CADASTRO</div>
                    <div class="acompanhamento-de-pedidos">ACOMPANHAMENTO DE PEDIDOS</div>
                </div>
                <img src="web/web/images/cart.svg" alt="carrinho">
            </div>

            <!-- Banner -->
            <!-- <div class="banner-container">
        <img class="sin-t-tulo-5-1" src="web/images/sin-t-tulo-5-10.png" alt="Banner Promocional">
        <img class="generatedtext-1-1" src="web/images/generatedtext-1-10.png" alt="Texto Banner">
      </div> -->

            <!-- Botões de Categoria -->
            <div class="category-buttons-container">
                <div class="category-buttons">
                    <div class="category-button">CARNE DE PANELA</div>
                    <div class="category-button">RECHEADA</div>
                    <div class="category-button">CARNE MOÍDA</div>
                    <div class="category-button">CHURRASCO</div>
                    <div class="category-button">BASSI</div>
                    <div class="category-button">CARNE DE ASSAR</div>
                    <div class="category-button">CARNE PARA BIFES</div>
                    <div class="category-button">FRANGO ASSADO</div>
                    <div class="category-button">SUÍNOS</div>
                    <div class="category-button">AVES</div>
                </div>
            </div>

            <!-- Produtos -->
            <div class="products-container">
                <div class="product-list">

                    @foreach ($products as $product)
                        <div class="product-item">
                            <div class="product-image-container">
                                <img class="product-image lazyload"
                                    src="{{ asset('web/images/products/' . $product['image'] . '.blur.webp') }}"
                                    data-src="{{ asset('web/images/products/' . $product['image']) }}" alt="{{ $product['name'] }}"
                                    width="300" height="300" loading="lazy">
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">{{ $product['name'] }}</h3>
                                <p class="product-description">
                                    {{ $product['description'] }}
                                </p>
                                <p class="product-price">R$ {{ $product['price'] }} KG</p>
                                <div class="product-actions">
                                    <div class="quantity-selector">
                                        <button class="quantity-btn">-</button>
                                        <span class="quantity-value">1</span>
                                        <button class="quantity-btn">+</button>
                                    </div>
                                    <button class="add-to-cart">ADICIONAR AO CARRINHO</button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Rodapé -->
            <footer>
                <div class="footer-content">
                    <div class="footer-column">
                        <h3>Sobre Nós</h3>
                        <ul>
                            <li><a href="#">Nossa História</a></li>
                            <li><a href="#">Qualidade</a></li>
                            <li><a href="#">Frigorífico Próprio</a></li>
                            <li><a href="#">Nossos Fornecedores</a></li>
                            <li><a href="#">Sustentabilidade</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Atendimento</h3>
                        <ul>
                            <li><a href="#">Central de Ajuda</a></li>
                            <li><a href="#">Política de Entrega</a></li>
                            <li><a href="#">Trocas e Devoluções</a></li>
                            <li><a href="#">Formas de Pagamento</a></li>
                            <li><a href="#">Dúvidas Frequentes</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Institucional</h3>
                        <ul>
                            <li><a href="#">Termos e Condições</a></li>
                            <li><a href="#">Política de Privacidade</a></li>
                            <li><a href="#">Trabalhe Conosco</a></li>
                            <li><a href="#">Franquias</a></li>
                            <li><a href="#">SAC</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Contato</h3>
                        <ul>
                            <li><a href="tel:+551112345678">(11) 1234-5678</a></li>
                            <li><a href="mailto:contato@acougue.com.br">contato@acougue.com.br</a></li>
                            <li><a href="#">Nosso Endereço</a></li>
                            <li><a href="#">Lojas Físicas</a></li>
                            <li><a href="#">Atendimento Online</a></li>
                        </ul>
                        <div class="social-icons">
                            <a href="#" class="social-icon">FB</a>
                            <a href="#" class="social-icon">IG</a>
                            <a href="#" class="social-icon">YT</a>
                            <a href="#" class="social-icon">WA</a>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p>© 2025 Açougue Online. Todos os direitos reservados. CNPJ: 12.345.678/0001-99</p>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"></script>
</body>

</html>
