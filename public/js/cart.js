// public/js/cart.js

document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart-button');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            const product = {
                id: button.getAttribute('data-id'),
                name: button.getAttribute('data-name'),
                price: button.getAttribute('data-price'),
            };

            addToCart(product);
        });
    });

    function addToCart(product) {
        fetch('/cart/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ product: product }),
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.message);
            updateCartCount();
        })
        .catch(error => console.error('Error:', error));
    }

    function updateCartCount() {
        fetch('/cart/count')
        .then(response => response.json())
        .then(data => {
            document.querySelector('.cart-count').textContent = data.count;
        })
        .catch(error => console.error('Error:', error));
    }
});
