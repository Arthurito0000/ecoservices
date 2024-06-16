<?php


require_once '../app/models/Database.php';
require_once '../app/models/DemandeModel.php';

class DemandeController {
    public function submit() {//
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
           
            $description = $_POST['details'];
            $nom= $_POST['nom'];
            $email = $_POST['email'];
            $telephone = $_POST['phone'];
            $service = $_POST['service'];
            $entreprise=$_POST['company'];
            $etat="en attente";
          
           
            // Valider les données (ajoutez ici vos propres validations)
            if (!empty($description) && !empty($nom) && !empty($telephone) && !empty($service) && !empty($email) && !empty($entreprise) && !empty($etat)) {
                // Initialiser la base de données et insérer les données
                $db = new Database();
                $demandeModel = new DemandeModel($db);
                $demandeModel->insertData($entreprise, $nom, $email, $telephone, $service, $description,$etat);

                // Rediriger vers la page d'animation
                header('Location: /ecoservices/public/home');
                exit();
            } else {
                echo "Tous les champs sont obligatoires.";
            }
        } else {
            echo "Méthode non autorisée.";
        }
    }

    public function update() {//
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $description = $_POST['details'];
            $nom= $_POST['nom'];
            $email = $_POST['email'];
            $telephone = $_POST['phone'];
            $service = $_POST['service'];
            $entreprise=$_POST['company'];
            $etat=$_POST['etat'];
          

            if ($this->validateData($id, $entreprise, $nom, $email, $telephone,$service,$description,$etat)) {
                $db = new Database();
                $productModel = new DemandeModel($db);
                $productModel-> updateData($id, $entreprise, $nom, $email, $telephone,$service,$description,$etat);

                header('Location: /ecoservices/public/admin_demande');
                exit();
            } else {
                echo "Tous les champs sont obligatoires.";
            }
        } else {
            echo "Méthode non autorisée.";
        }
    }

    private function validateData($id, $entreprise, $nom, $email, $telephone,$service,$description,$etat) { //
        return !empty($description) && !empty($nom) && !empty($telephone) && !empty($service) && !empty($email) && !empty($entreprise) && !empty($etat);
    }
}


$controller = new DemandeController();
$route = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if ($route === 'ecoservices/public/submitdemande') {
    $controller->submit();
} elseif ($route === 'ecoservices/public/updatedemande') {
    $controller->update();
} else {
    echo "Route non reconnue.";
}
?>
