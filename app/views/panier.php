<?php 
session_start();

// Pas besoin de calculer à nouveau ici, car le prix total est déjà calculé en JavaScript
// Si nécessaire, récupérez-le de la session ou stockez-le directement depuis JavaScript

// Récupérer le prix total depuis JavaScript (supposons que vous stockez le prix dans une variable JS)
// Puis le stocker dans $_SESSION
if (isset($_POST['totalPrice'])) {
    $_SESSION['totalPrice'] = $_POST['totalPrice'];
} else {
    // Gérer le cas où le prix total n'est pas passé depuis JavaScript
    $_SESSION['totalPrice'] = 0; // Par défaut, si nécessaire
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>
    <link rel="stylesheet" href="/ecoservices/public/css/panier.css">
    <link rel="stylesheet" href="/ecoservices/public/css/produits.css">
</head>
<body>

    <section class="panier">
        <div class="fermer"> 
            <img src="/ecoservices/public/img/c10cf886b8414973bbc0df4ba5ee1e19.png" alt="">
            <button class="close"><a href="/ecoservices/public/list_product">Fermer</a></button>
        </div>
        <div class="container">
            <div class="head">
                <h1>Vos Articles</h1>
                <h1>Prix Total: <span id="totalPrice">0$</span></h1>
            </div>
            <div id="cartItems"></div>
            <<div class="bt"><a href="/ecoservices/app/views/livraison.php" class="btn">Payer par Stripe</a></div>
            <!-- Modifiez le lien pour rediriger vers checkout.php et incluez le prix total -->


        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cartItemsContainer = document.getElementById('cartItems');
            const totalPriceElement = document.getElementById('totalPrice');
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let totalPrice = 0;

            cart.forEach(item => {
                const card = document.createElement('div');
                card.classList.add('card');
                
                const img = document.createElement('img');
                img.src = '/ecoservices/public/img/' + item.image;
                img.alt = item.name;
                card.appendChild(img);

                const content = document.createElement('div');
                content.classList.add('content');

                const itemName = document.createElement('h3');
                itemName.textContent = item.name;
                content.appendChild(itemName);

                const itemPrice = document.createElement('h3');
                itemPrice.innerHTML = `Prix: <span>${item.price}$</span>`;
                content.appendChild(itemPrice);

                const quantityLabel = document.createElement('label');
                quantityLabel.setAttribute('for', 'quantity');
                quantityLabel.textContent = 'Quantité:';
                content.appendChild(quantityLabel);

                const quantityInput = document.createElement('input');
                quantityInput.setAttribute('type', 'number');
                quantityInput.setAttribute('name', 'quantity');
                quantityInput.setAttribute('min', '1');
                quantityInput.value = item.quantity;
                quantityInput.addEventListener('change', function() {
                    updateQuantity(item.id, parseInt(quantityInput.value));
                });
                content.appendChild(quantityInput);

                card.appendChild(content);

                const annuler = document.createElement('div');
                annuler.classList.add('annuler');

                const supButton = document.createElement('button');
                supButton.classList.add('sup');
                supButton.textContent = 'X';
                supButton.addEventListener('click', function() {
                    removeFromCart(item.id);
                });
                annuler.appendChild(supButton);

                card.appendChild(annuler);

                cartItemsContainer.appendChild(card);

                totalPrice += item.price * item.quantity;
            });

            totalPriceElement.textContent = totalPrice + '$';
        });

        function updateQuantity(productId, newQuantity) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let product = cart.find(item => item.id === productId);

            if (product) {
                product.quantity = newQuantity;
                localStorage.setItem('cart', JSON.stringify(cart));
                location.reload();
            }
        }

        function removeFromCart(productId) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart = cart.filter(item => item.id !== productId);
            localStorage.setItem('cart', JSON.stringify(cart));
            location.reload();
        }
    </script>
    <script src="https://js.stripe.com/v3/"></script>
</body>
</html>
