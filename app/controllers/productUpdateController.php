<?php
require_once '../app/models/Database.php';
require_once '../app/models/ProductModel.php';

$database = new Database();
$db = $database->conn;

$productModel = new ProductModel($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $category = $_POST['category'];
    $etat = $_POST['etat'];

    $file_new = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_new = '../uploads/' . basename($_FILES['image']['name']);
        move_uploaded_file($file_tmp, $file_new);
    }

    if ($productModel->updateData($id, $name, $description, $price, $stock, $category, $etat, $file_new)) {
        echo "Product updated successfully.";
    } else {
        echo "Failed to update product.";
    }
} else {
    echo "Invalid request.";
}
?>
