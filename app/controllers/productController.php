<?php

require_once '../app/models/Database.php';
require_once '../app/models/ProductModel.php';

class ProductController {
    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $description = $_POST['description'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $stock = $_POST['stock'];
            $category = $_POST['category'];
            $statut = $_POST['etat'];

            $file = $_FILES['image'];
            $filename = $_FILES['image']['name'];
            $fileTmpName = $_FILES['image']['tmp_name'];
            $file_new = uniqid() . "_" . $filename;
            move_uploaded_file($fileTmpName, '../public/img/' . $file_new);

            if (!empty($description) && !empty($name) && !empty($price) && !empty($stock) && !empty($category) && !empty($statut) && !empty($file_new)) {
                $db = new Database();
                $productModel = new ProductModel($db);
                $productModel->insertData($name, $description, $price, $stock, $category, $statut, $file_new);

                header('Location: /ecoservices/public/admin_produit');
                exit();
            } else {
                echo "Tous les champs sont obligatoires.";
            }
        } else {
            echo "Méthode non autorisée.";
        }
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $description = $_POST['description'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $stock = $_POST['stock'];
            $category = $_POST['category'];
            $statut = $_POST['etat'];

            $file = $_FILES['image'];
            $file_new = !empty($file['name']) ? $this->handleFileUpload($file) : $_POST['current_file'];

            if ($this->validateData($name, $description, $price, $stock, $category, $statut, $file_new)) {
                $db = new Database();
                $productModel = new ProductModel($db);
                $productModel->updateData($id, $name, $description, $price, $stock, $category, $statut, $file_new);

                header('Location: /ecoservices/public/admin_produit');
                exit();
            } else {
                echo "Tous les champs sont obligatoires.";
            }
        } else {
            echo "Méthode non autorisée.";
        }
    }

    private function handleFileUpload($file) {
        if ($file && $file['error'] == 0) {
            $filename = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $file_ext = pathinfo($filename, PATHINFO_EXTENSION);
            $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];

            if (in_array($file_ext, $allowed_ext)) {
                $file_new = uniqid() . "_" . basename($filename);
                $upload_dir = '../public/img/';
                
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                }

                move_uploaded_file($fileTmpName, $upload_dir . $file_new);
                return $file_new;
            } else {
                echo "Invalid file type.";
                return null;
            }
        } else {
            echo "File upload error.";
            return null;
        }
    }

    private function validateData($description, $name, $price, $stock, $category, $statut, $file_new) {
        return !empty($description) && !empty($name) && !empty($price) && !empty($stock) && !empty($category) && !empty($statut) && !empty($file_new);
    }
}

$controller = new ProductController();
$route = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if ($route === 'ecoservices/public/submitproduit') {
    $controller->submit();
} elseif ($route === 'ecoservices/public/updateproduit') {
    $controller->update();
} else {
    echo "Route non reconnue.";
}
?>
