<?php

// C:\xampp\htdocs\payment\app\controllers\FormController.php

require_once '../app/models/Database.php';
require_once '../app/models/InscriptionModel.php';

class InscriptionController {
    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
           
            $email = $_POST['email'];
            $name = $_POST['name'];
            $password = $_POST['password'];
            $user_type = $_POST['user_type'];
           
            // Valider les données (ajoutez ici vos propres validations)
            if (!empty($email) && !empty($name) && !empty($password) && !empty($user_type) ) {
                // Initialiser la base de données et insérer les données
                $db = new Database();
                $inscriptionModel = new InscriptionModel($db);
                $inscriptionModel->insertData($name, $email, $password, $user_type);

                // Rediriger vers la page d'animation
                header('Location: /ecoservices/public/connexion');
                exit();
            } else {
                echo "Tous les champs sont obligatoires.";
            }
        } else {
            echo "Méthode non autorisée.";
        }
    }
}

// Appeler la méthode submit si la route est /submit
$controller = new InscriptionController();
$controller->submit();
?>