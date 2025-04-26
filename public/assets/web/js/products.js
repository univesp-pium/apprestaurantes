document.addEventListener("DOMContentLoaded", () => {
    // Controle de quantidade dos produtos
    document.querySelectorAll('.product-card').forEach(card => {
        const minus = card.querySelector('.minus');
        const plus = card.querySelector('.plus');
        const quantityDisplay = card.querySelector('.quantity');
        let quantity = 1;

        minus.addEventListener('click', () => {
            quantity = Math.max(1, quantity - 1);
            quantityDisplay.textContent = quantity;
        });

        plus.addEventListener('click', () => {
            quantity++;
            quantityDisplay.textContent = quantity;
        });

        const addToCartBtn = card.querySelector('button.btn-danger.w-100');
        addToCartBtn.addEventListener('click', () => {
            const name = card.querySelector(".card-title").textContent;
            const priceText = name.match(/R\$\s?([\d,\.]+)/);
            const price = priceText ? parseFloat(priceText[1].replace(',', '.')) : 0;

            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const existing = cart.find(item => item.name === name);
            if (existing) {
                existing.quantity += quantity;
            } else {
                cart.push({ name, price, quantity });
            }
            localStorage.setItem('cart', JSON.stringify(cart));
            alert("Produto adicionado ao carrinho!");
            quantity = 1;
            quantityDisplay.textContent = quantity;
        });
    });

    // Filtro por categoria com botão ativo
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const categoria = btn.dataset.category;

            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('btn-danger'));
            btn.classList.add('btn-danger');

            document.querySelectorAll('.product-card').forEach(card => {
                card.style.display = card.dataset.category === categoria ? 'block' : 'none';
            });
        });
    });

    // Redirecionamento para carrinho
    const cartIcon = document.querySelector('img[alt="Carrinho"]');
    if (cartIcon) {
        cartIcon.addEventListener("click", () => {
            window.location.href = "car.blade.php";
        });
    }
});
