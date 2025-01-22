document.addEventListener('DOMContentLoaded', function() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    updateCartCount();

    // Add to cart
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.dataset.id;
            const product = {
                id: productId,
                name: this.closest('.card').querySelector('.card-title').textContent,
                price: parseFloat(this.closest('.card').querySelector('.h5').textContent.replace('$', '')),
                image: this.closest('.card').querySelector('img').src,
                quantity: 1
            };

            const existingItem = cart.find(item => item.id === productId);
            if (existingItem) {
                existingItem.quantity++;
            } else {
                cart.push(product);
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
            updateCartModal();
        });
    });

    // Update cart count
    function updateCartCount() {
        const count = cart.reduce((sum, item) => sum + item.quantity, 0);
        document.querySelector('.cart-count').textContent = count;
    }

    // Update cart modal
    function updateCartModal() {
        const cartItems = document.getElementById('cart-items');
        const cartTotal = document.getElementById('cart-total');
        
        cartItems.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;

            cartItems.innerHTML += `
                <div class="cart-item">
                    <img src="${item.image}" alt="${item.name}">
                    <div class="cart-item-details">
                        <h6>${item.name}</h6>
                        <div class="quantity-controls">
                            <button class="btn btn-sm btn-outline-secondary" onclick="updateQuantity('${item.id}', ${item.quantity - 1})">-</button>
                            <span class="mx-2">${item.quantity}</span>
                            <button class="btn btn-sm btn-outline-secondary" onclick="updateQuantity('${item.id}', ${item.quantity + 1})">+</button>
                        </div>
                    </div>
                    <div class="text-end">
                        <div>$${itemTotal.toFixed(2)}</div>
                        <button class="btn btn-sm btn-danger" onclick="removeItem('${item.id}')">Remove</button>
                    </div>
                </div>
            `;
        });

        cartTotal.textContent = `$${total.toFixed(2)}`;
    }

    // Update quantity
    window.updateQuantity = function(id, quantity) {
        if (quantity < 1) {
            cart = cart.filter(item => item.id !== id);
        } else {
            const item = cart.find(item => item.id === id);
            if (item) {
                item.quantity = quantity;
            }
        }
        
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCount();
        updateCartModal();
    };

    // Remove item
    window.removeItem = function(id) {
        cart = cart.filter(item => item.id !== id);
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCount();
        updateCartModal();
    };

    // Initialize cart modal
    const cartModal = document.getElementById('cartModal');
    cartModal.addEventListener('show.bs.modal', updateCartModal);

    // Checkout button
    document.getElementById('checkout-btn').addEventListener('click', function() {
        // Add checkout logic here
        alert('Checkout functionality will be implemented here');
    });
});