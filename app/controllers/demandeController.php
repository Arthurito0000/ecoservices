<?php


require_once '../app/models/Database.php';
require_once '../app/models/DemandeModel.php';

class ProductController {
    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
           
            $description = $_POST['details'];
            $nom= $_POST['nom'];
            $email = $_POST['email'];
            $telephone = $_POST['phone'];
            $service = $_POST['service'];
            $entreprise=$_POST['company'];
          
           
            // Valider les données (ajoutez ici vos propres validations)
            if (!empty($description) && !empty($nom) && !empty($telephone) && !empty($service) && !empty($email) && !empty($entreprise) ) {
                // Initialiser la base de données et insérer les données
                $db = new Database();
                $demandeModel = new DemandeModel($db);
                $demandeModel->insertData($entreprise, $nom, $email, $telephone, $service, $description);

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
$controller = new ProductController();
$controller->submit();
?>