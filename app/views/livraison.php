<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Stocker les informations de livraison dans la session
    $_SESSION['shipping'] = [
        'name' => $_POST['name'],
        'address' => $_POST['address'],
        'city' => $_POST['city'],
        'zip' => $_POST['zip'],
        'country' => $_POST['country']
    ];

    // Rediriger vers la page de paiement Stripe
    header('Location: /ecoservices/public/checkout.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>damande devis</title>
    <link rel="stylesheet" href="css/devis.css">
    <link rel="stylesheet" type="text/css" href="/ecoservices/public/css/devis.css" />
</head>
<body>

    <section id="Connexion" class="connexion">

        <div class="connexion-contain">
            <div class="logo">
                <img src="/ecoservices/public/img/c10cf886b8414973bbc0df4ba5ee1e19.png" alt="">
              </div>
    
            <div class="contact-head">
        
            <h1>Informations de Livraison</h1>
            </div>
       
 <div class="form">
       
        <form method="POST" action="/ecoservices/app/views/livraison.php">
        <label for="name">Nom complet:</label>
        <input type="text" id="company" name="name" required>

        <label for="address">Adresse:</label>
        <input type="text" id="company" name="address" required>

        <label for="city">Ville:</label>
        <input type="text" id="company"name="city" required>

        <label for="zip">Code Postal:</label>
        <input type="text" id="company" name="zip" required>

        <label for="country">Pays:</label>
        <input type="text" id="company" name="country" required>


        <div class="submit">
        <button type="submit" class="btn btn1 btn-submit">Finaliser le paiement</button>

     
                        
         </div>
    </form>
            </div>
        </div>
   
   
       </section>
   
    
</body>
</html>