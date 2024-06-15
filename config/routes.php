<!-- routes.php -->

<?php

$routes=[];

//definir les routes
$routes = [
    '/ecoservices/public/home' => '../app/views/home.php',
    '/ecoservices/public/connexion' => '../app/views/connexion.php',
    '/ecoservices/public/demande' => '../app/views/demande.php',
    '/ecoservices/public/inscription' => '../app/views/inscription.php',
    '/ecoservices/public/panier' => '../app/views/panier.php',
    '/ecoservices/public/list_product' => '../app/views/List_product.php',
    '/ecoservices/public/product' => '../app/views/produit.php',
    '/ecoservices/public/submitinscription' => '../app/controllers/inscriptionController.php',
    '/ecoservices/public/submitproduit' => '../app/controllers/productController.php',
    '/ecoservices/public/admin_produit' => '../app/views/admin_produit.php',
    '/ecoservices/public/admin_demande' => '../app/views/admin_demande.php',
    '/ecoservices/public/submitdemande' => '../app/controllers/demandeController.php',
    '/ecoservices/public/updateproduit' => '../app/controllers/productController.php', 
    '/ecoservices/public/updateproduit' => '../app/controllers/productController.php', 
    '/ecoservices/public/checkout' => '../public/checkout.php', 
];

return $routes;


?>