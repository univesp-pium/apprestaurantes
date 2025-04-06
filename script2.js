document.addEventListener('DOMContentLoaded', function() {
    // Controle de quantidade
    document.querySelectorAll('.quantity-btn').forEach(button => {
      button.addEventListener('click', function() {
        const input = this.parentNode.querySelector('.quantity-input');
        let value = parseInt(input.value);
        
        if (this.classList.contains('minus') && value > 1) {
          input.value = value - 1;
        } else if (this.classList.contains('plus')) {
          input.value = value + 1;
        }
        
        updateItemTotal(this.closest('.cart-item'));
        updateCartTotals();
      });
    });
  
    // Atualiza o total do item
    function updateItemTotal(item) {
      const priceText = item.querySelector('.item-price').textContent;
      const price = parseFloat(priceText.replace('R$ ', '').replace(',', '.'));
      const quantity = parseInt(item.querySelector('.quantity-input').value);
      const total = price * quantity;
      
      item.querySelector('.item-total').textContent = 
        'R$ ' + total.toFixed(2).replace('.', ',');
    }
  
    // Remove item
    document.querySelectorAll('.remove-item').forEach(button => {
      button.addEventListener('click', function() {
        if (confirm('Deseja remover este item do carrinho?')) {
          this.closest('.cart-item').remove();
          updateItemCount();
          updateCartTotals();
        }
      });
    });
  
    // Atualiza contagem de itens
    function updateItemCount() {
      const count = document.querySelectorAll('.cart-item').length;
      document.querySelector('.item-count').textContent = 
        count + (count === 1 ? ' item' : ' itens');
      
      // Atualiza o subtotal
      const subtotalRow = document.querySelector('.summary-row:first-child .summary-value');
      subtotalRow.textContent = count + ' itens';
    }
  
    // Atualiza totais do carrinho
    function updateCartTotals() {
      let subtotal = 0;
      
      document.querySelectorAll('.cart-item').forEach(item => {
        const totalText = item.querySelector('.item-total').textContent;
        subtotal += parseFloat(totalText.replace('R$ ', '').replace(',', '.'));
      });
      
      const shipping = 12.50;
      const total = subtotal + shipping;
      
      document.querySelector('.summary-value:nth-of-type(2)').textContent = 
        'R$ ' + subtotal.toFixed(2).replace('.', ',');
      document.querySelector('.total-value').textContent = 
        'R$ ' + total.toFixed(2).replace('.', ',');
    }
  
    // Botão finalizar compra
    document.querySelector('.checkout-btn').addEventListener('click', function() {
      const itemCount = document.querySelectorAll('.cart-item').length;
      
      if (itemCount === 0) {
        alert('Seu carrinho está vazio!');
        return;
      }
      
      alert('Compra finalizada com sucesso! Obrigado por comprar no Açougue Premium.');
      // Aqui você pode redirecionar para página de confirmação
      // window.location.href = 'confirmacao.html';
    });
  
    // Inicializa totais
    updateItemCount();
    updateCartTotals();
  });