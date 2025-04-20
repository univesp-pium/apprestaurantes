// Script para destacar a categoria selecionada
document.querySelectorAll('.category-btn').forEach(button => {
    button.addEventListener('click', function() {
      document.querySelectorAll('.category-btn').forEach(btn => {
        btn.classList.remove('active');
      });
      this.classList.add('active');
    });
  });
  
  // Script para seleção visual de opções
  function setupOptionSelection() {
    // Para botões SIM/NÃO
    document.querySelectorAll('.option-buttons .btn-secondary').forEach(button => {
      button.addEventListener('click', function() {
        // Remove seleção de todos os botões do grupo
        this.parentNode.querySelectorAll('.btn-secondary').forEach(btn => {
          btn.classList.remove('selected');
        });
        // Adiciona seleção ao botão clicado
        this.classList.add('selected');
      });
    });
  
    // Para selects
    document.querySelectorAll('select.btn-secondary').forEach(select => {
      select.addEventListener('change', function() {
        if (this.value) {
          this.classList.add('selected');
        } else {
          this.classList.remove('selected');
        }
      });
    });
  }
  
  // Configura seleção visual na página inicial
  setupOptionSelection();
  
  // Script para o modal de opções mobile
  const modal = document.getElementById('optionsModal');
  const closeModal = document.querySelector('.close-modal');
  const addToCartButtons = document.querySelectorAll('.add-to-cart');
  const modalProductName = document.getElementById('modalProductName');
  const modalProductImage = document.getElementById('modalProductImage');
  const nextStepButtons = document.querySelectorAll('.next-step');
  const prevStepButtons = document.querySelectorAll('.prev-step');
  const confirmPurchaseButton = document.getElementById('confirmPurchase');
  
  // Mostrar modal ao clicar em comprar (mobile)
  addToCartButtons.forEach(button => {
    button.addEventListener('click', function() {
      if (window.innerWidth <= 768) {
        const productName = this.getAttribute('data-product');
        const productImage = this.getAttribute('data-image');
        
        modalProductName.textContent = productName;
        modalProductImage.src = productImage;
        modalProductImage.alt = productName;
        
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
        
        // Resetar os passos
        document.querySelectorAll('.modal-step').forEach(step => {
          step.classList.remove('active');
        });
        document.getElementById('step1').classList.add('active');
  
        // Configurar seleção visual para o modal
        setTimeout(() => {
          setupOptionSelection();
        }, 100);
      }
    });
  });
  
  // Fechar modal
  closeModal.addEventListener('click', function() {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
  });
  
  // Navegação entre passos
  nextStepButtons.forEach(button => {
    button.addEventListener('click', function() {
      const nextStepId = this.getAttribute('data-next');
      const currentStep = this.closest('.modal-step');
      
      currentStep.classList.remove('active');
      document.getElementById(nextStepId).classList.add('active');
    });
  });
  
  prevStepButtons.forEach(button => {
    button.addEventListener('click', function() {
      const prevStepId = this.getAttribute('data-prev');
      const currentStep = this.closest('.modal-step');
      
      currentStep.classList.remove('active');
      document.getElementById(prevStepId).classList.add('active');
    });
  });
  
  // Confirmar compra
  confirmPurchaseButton.addEventListener('click', function() {
    alert('Produto adicionado ao carrinho com sucesso!');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
  });
  
  // Fechar modal ao clicar fora
  window.addEventListener('click', function(event) {
    if (event.target === modal) {
      modal.style.display = 'none';
      document.body.style.overflow = 'auto';
    }
  });