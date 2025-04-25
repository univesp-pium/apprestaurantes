<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preferências do Pedido</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <header class="bg-white shadow-sm py-3 px-4 d-flex justify-content-between align-items-center fixed-top">
    <h1 class="text-danger fw-bold fs-3">Meu Carrinho</h1>
    <nav class="d-flex gap-4">
      <a href="index.blade.php" class="text-dark text-decoration-none text-uppercase">Voltar</a>
      <a href="#" class="text-dark text-decoration-none text-uppercase">Minha Conta</a>
    </nav>
  </header>

  <main class="container mt-5 pt-5">
    <h2 class="text-center text-danger mb-4">Itens Selecionados</h2>
    <div id="card-container" class="mb-5"></div>

    <section class="related-products mb-5">
      <h3 class="mb-3">Produtos Relacionados</h3>
      <div class="row g-3">
        <div class="col-md-4 d-flex align-items-center gap-2">
          <img src="https://placehold.co/30x30" alt="Carvão" class="rounded">
          <span>Carvão</span>
          <button class="btn btn-outline-danger btn-sm related-minus" data-item="carvao">−</button>
          <span class="fw-bold related-qty" id="carvao">0</span>
          <button class="btn btn-outline-danger btn-sm related-plus" data-item="carvao">+</button>
        </div>
        <div class="col-md-4 d-flex align-items-center gap-2">
          <img src="https://placehold.co/30x30" alt="Linguiça" class="rounded">
          <span>Linguiça</span>
          <button class="btn btn-outline-danger btn-sm related-minus" data-item="linguica">−</button>
          <span class="fw-bold related-qty" id="linguica">0</span>
          <button class="btn btn-outline-danger btn-sm related-plus" data-item="linguica">+</button>
        </div>
        <div class="col-md-4 d-flex align-items-center gap-2">
          <img src="https://placehold.co/30x30" alt="Acendedor" class="rounded">
          <span>Acendedor</span>
          <button class="btn btn-outline-danger btn-sm related-minus" data-item="acendedor">−</button>
          <span class="fw-bold related-qty" id="acendedor">0</span>
          <button class="btn btn-outline-danger btn-sm related-plus" data-item="acendedor">+</button>
        </div>
      </div>
    </section>

    <div class="text-center">
      <button class="btn btn-danger btn-lg mt-4" onclick="finalizarCompra()">Finalizar Compra</button>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-danger text-white text-center py-4">
    <p class="mb-0">&copy; 2025 Açougue Premium. Todos os direitos reservados.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const cardContainer = document.getElementById("card-container");
      let cart = JSON.parse(localStorage.getItem("cart")) || [];

      function renderCart() {
        cardContainer.innerHTML = "";
        cart.forEach((item, index) => {
          const div = document.createElement("div");
          div.className = "border rounded p-3 mb-4 bg-white position-relative";
          div.innerHTML = `
            <button class="btn-close position-absolute top-0 end-0 m-2" aria-label="Remover" data-index="${index}"></button>
            <h5 class="text-danger">${item.name}</h5>
            <p>Quantidade: ${item.quantity} | Preço unitário: R$ ${item.price.toFixed(2)}</p>
            <textarea placeholder="Ex: Peça bem passada, cortar grosso..." class="form-control mb-3 obs-input" id="obs-${index}"></textarea>
            <div class="d-flex gap-2 flex-wrap">
              <button class="btn btn-outline-secondary btn-sm pref-btn" data-index="${index}" data-text="Fatiado">Fatiado</button>
              <button class="btn btn-outline-secondary btn-sm pref-btn" data-index="${index}" data-text="Moído">Moído</button>
              <button class="btn btn-outline-secondary btn-sm pref-btn" data-index="${index}" data-text="Sem osso">Sem osso</button>
              <button class="btn btn-outline-secondary btn-sm pref-btn" data-index="${index}" data-text="Congelado">Congelado</button>
            </div>
          `;
          cardContainer.appendChild(div);
        });

        document.querySelectorAll('.pref-btn').forEach(button => {
          button.addEventListener('click', () => {
            const index = button.dataset.index;
            const text = button.dataset.text;
            const textarea = document.getElementById(`obs-${index}`);
            if (!textarea.value.includes(text)) {
              textarea.value += (textarea.value ? "\n" : "") + text;
            }
          });
        });

        document.querySelectorAll('.btn-close').forEach(btn => {
          btn.addEventListener('click', () => {
            const index = parseInt(btn.dataset.index);
            cart.splice(index, 1);
            localStorage.setItem("cart", JSON.stringify(cart));
            renderCart();
          });
        });
      }

      renderCart();

      document.querySelectorAll('.related-minus').forEach(btn => {
        btn.addEventListener('click', () => {
          const id = btn.dataset.item;
          const span = document.getElementById(id);
          let qtd = parseInt(span.textContent);
          span.textContent = Math.max(0, qtd - 1);
        });
      });

      document.querySelectorAll('.related-plus').forEach(btn => {
        btn.addEventListener('click', () => {
          const id = btn.dataset.item;
          const span = document.getElementById(id);
          let qtd = parseInt(span.textContent);
          span.textContent = qtd + 1;
        });
      });
    });

    function finalizarCompra() {
      const relatedProducts = {
        carvao: parseInt(document.getElementById('carvao').textContent),
        linguica: parseInt(document.getElementById('linguica').textContent),
        acendedor: parseInt(document.getElementById('acendedor').textContent)
      };

      const cart = JSON.parse(localStorage.getItem("cart")) || [];
      const edits = [];
      cart.forEach((item, index) => {
        const obs = document.getElementById(`obs-${index}`)?.value || "";
        edits.push({ text: obs });
      });
      localStorage.setItem("productEdits", JSON.stringify(edits));
      localStorage.setItem("relatedProducts", JSON.stringify(relatedProducts));
      window.location.href = "confirmation.blade.php";
    }
  </script>
</body>
</html>
