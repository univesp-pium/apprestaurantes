<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmação - Açougue Premium</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <header class="bg-white shadow-sm py-3 px-4 d-flex justify-content-between align-items-center fixed-top">
    <h1 class="text-danger fw-bold fs-3">Confirmação do Pedido</h1>
    <nav class="d-flex gap-4">
      <a href="car.blade.php" class="text-dark text-decoration-none text-uppercase">Voltar</a>
      <a href="#" class="text-dark text-decoration-none text-uppercase">Minha Conta</a>
    </nav>
  </header>

  <main class="container mt-5 pt-5">
    <h2 class="text-danger text-center my-4">Seu Pedido</h2>
    <div id="cart-items-container"></div>

    <section class="my-5 bg-white p-4 rounded shadow-sm">
      <h3 class="mb-3">Produtos Adicionais</h3>
      <div id="related-items-container"></div>
    </section>

    <section class="text-center mb-4">
      <div class="mb-3">
        <input type="tel" class="form-control d-inline-block w-auto" id="whatsappNumber" value="(15) 99173-9991" disabled placeholder="(00) 00000-0000">
        <button class="btn btn-danger ms-2" id="editWhatsappBtn" onclick="toggleEdit()">Editar</button>
      </div>
      <p class="text-muted">Insira seu número para ser avisado quando o pedido estiver pronto.</p>
    </section>

    <div class="text-end mb-4">
      <h4>Total do Pedido: <span class="text-danger fw-bold" id="totalPrice">R$ 0,00</span></h4>
    </div>
    <div class="text-center">
      <button class="btn btn-danger btn-lg" onclick="openModal()">Finalizar Compra</button>
    </div>
  </main>

  <div class="modal fade" id="confirmationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center p-4">
        <h2 class="mb-3">Obrigado por comprar conosco! 🎉</h2>
        <img src="https://placehold.co/500x500" alt="Confirmação" class="img-fluid rounded mb-3">
        <p>Seu pedido foi processado com sucesso!</p>
        <p>Entraremos em contato para confirmar a entrega.</p>
        <button class="btn btn-danger mt-3" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>

  <footer class="bg-danger text-white text-center py-4">
    <p class="mb-0">&copy; 2025 Açougue Premium. Todos os direitos reservados.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const whatsappInput = document.getElementById('whatsappNumber')
    const editButton = document.getElementById('editWhatsappBtn')
    let isEditing = false

    function toggleEdit() {
      isEditing = !isEditing
      if (isEditing) {
        whatsappInput.removeAttribute('disabled')
        whatsappInput.focus()
        editButton.textContent = 'Salvar'
        editButton.classList.add('btn-success')
      } else {
        const isValid = /\(\d{2}\) \d{5}-\d{4}/.test(whatsappInput.value)
        if (isValid) {
          whatsappInput.setAttribute('disabled', true)
          editButton.textContent = 'Editar'
          editButton.classList.remove('btn-success')
          localStorage.setItem('whatsappNumber', whatsappInput.value)
        } else {
          alert('Formato inválido! Use (00) 00000-0000')
          whatsappInput.value = localStorage.getItem('whatsappNumber') || '(15) 99173-9991'
        }
      }
    }

    document.addEventListener('DOMContentLoaded', () => {
      const cart = JSON.parse(localStorage.getItem('cart')) || [];

      // Redireciona se o carrinho estiver vazio
      if (cart.length === 0) {
        window.location.href = "car.blade.php"; // ou "index.blade.php"
        return;
      }

      const edits = JSON.parse(localStorage.getItem('productEdits')) || []
      const related = JSON.parse(localStorage.getItem('relatedProducts')) || {}
      const container = document.getElementById('cart-items-container')
      const relatedContainer = document.getElementById('related-items-container')
      let total = 0

      cart.forEach((item, index) => {
        const div = document.createElement('div')
        div.className = 'border rounded p-3 mb-3 bg-white'
        div.innerHTML = `
          <h5 class="text-danger">${item.name}</h5>
          <p>Quantidade: ${item.quantity} | Preço unitário: R$ ${item.price.toFixed(2)}</p>
          <div>${edits[index]?.text?.split('\n').map(txt => `<p>✔️ ${txt}</p>`).join('')}</div>
          ${edits[index]?.text?.trim() ? `<div class='fst-italic text-muted'>Notas: ${edits[index].text}</div>` : ''}
        `
        container.appendChild(div)
        total += item.quantity * item.price
      })

      Object.entries(related).forEach(([nome, qtd]) => {
        if (qtd > 0) {
          const item = document.createElement('div')
          item.className = 'd-flex justify-content-between border-bottom py-2'
          item.innerHTML = `<span>${nome}</span><span>Qtd: ${qtd}</span>`
          relatedContainer.appendChild(item)
        }
      })

      document.getElementById('totalPrice').textContent = `R$ ${total.toFixed(2)}`
    })

    function openModal() {
      const modal = new bootstrap.Modal(document.getElementById('confirmationModal'))
      modal.show()
    }
  </script>
</body>
</html>
