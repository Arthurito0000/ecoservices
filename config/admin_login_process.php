
<?php
session_start();
require_once '../app/models/Database.php';

// Initialiser la connexion à la base de données
$database = new Database();
$db = $database->getConnection();

function verifyAdminCredentials($username, $password, $db) {
    $query = "SELECT * FROM admins WHERE username = :username AND password = :password";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    return $stmt->rowCount();
}

function verifyAdminCredentials2($username, $password, $db) {
    $query = "SELECT * FROM inscription WHERE nom = :username AND password = :password";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    return $stmt->rowCount();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $isValid = verifyAdminCredentials($username, $password, $db);
    $isValid2 = verifyAdminCredentials2($username, $password, $db);

    if ($isValid === 1) {
        // Stocker les informations de l'administrateur dans la session
        $_SESSION['admin_username'] = $username;

        // Rediriger vers la page admin_product
        header("Location: /ecoservices/app/views/admin_produit.php");
        exit();
    } else if($isValid2 === 1) {
        $_SESSION['user_id'] = $username;
        // Rediriger vers la page de connexion avec un message d'erreur
        header("Location: /ecoservices/app/views/home.php");
        exit();
    }else{
        // Rediriger vers la page de connexion avec un message d'erreur
        header("Location: /ecoservices/app/views/connexion.php?error=username ou mot de passe incorrect");
        exit();
    }
}
?>