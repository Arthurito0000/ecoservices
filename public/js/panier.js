
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('button[id="cart"]').forEach(button => {
        button.addEventListener('click', function() {
           


            const productId =button.getAttribute('data-id');
            const productName = button.getAttribute('data-name');
            const productImage = button.getAttribute('data-image');
            const productPrice = parseFloat(button.getAttribute('data-price'));
            const productQuantity = parseInt(button.parentElement.querySelector('input[name="quantity"]').value);

            const cartItem = {
                id: productId,
                name: productName,
                image: productImage,
                price: productPrice,
                quantity: productQuantity
            };

            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let existingProduct = cart.find(item => item.id === productId);

            if (existingProduct) {
                existingProduct.quantity += productQuantity;
            } else {
                cart.push(cartItem);
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartItemCount();
        });
    });

    function updateCartItemCount() {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        let itemCount = cart.reduce((total, item) => total + item.quantity, 0);
        document.querySelector('.navbar .indice').innerText = itemCount;
    }

    updateCartItemCount();
});
