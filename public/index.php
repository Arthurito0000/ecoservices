
<?php
$routes = include('../config/routes.php');

// Obtenir l'URI de la requête
$uri = $_SERVER['REQUEST_URI'];

// Vérifier si une route correspond à l'URI demandée
if (isset($routes[$uri])) {
    require $routes[$uri];
} else {
    // Gérer les routes non trouvées
    echo "404 Not Found";
}

?>
