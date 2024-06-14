<?php
class ProductModel {
    private $conn;
    private $table_name = 'produit';

    public function __construct($db) {
        $this->conn = $db->getConnection();
    }

    public function getAllData() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = [];
        while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            $data[] = $row;
        }
        return $data;
    }

    public function getProductById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function insertData($name, $description, $price, $stock, $category, $etat, $file_new) {
        $query = "INSERT INTO " . $this->table_name . " (name, description, price, stock, category, etat, image_path) VALUES (:value1, :value2, :value3, :value4, :value5, :value6, :value7)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':value1', $name);
        $stmt->bindParam(':value2', $description);
        $stmt->bindParam(':value3', $price);
        $stmt->bindParam(':value4', $stock);
        $stmt->bindParam(':value5', $category);
        $stmt->bindParam(':value6', $etat);
        $stmt->bindParam(':value7', $file_new);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function updateData($id, $name, $description, $price, $stock, $category, $etat, $file_new) {
        $query = "UPDATE " . $this->table_name . " SET name = :value1, description = :value2, price = :value3, stock = :value4, category = :value5, etat = :value6, image_path = :value7 WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':value1', $name);
        $stmt->bindParam(':value2', $description);
        $stmt->bindParam(':value3', $price);
        $stmt->bindParam(':value4', $stock);
        $stmt->bindParam(':value5', $category);
        $stmt->bindParam(':value6', $etat);
        $stmt->bindParam(':value7', $file_new);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
