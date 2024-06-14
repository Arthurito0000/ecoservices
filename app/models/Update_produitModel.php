
<?php
     
class ProductModel {
    private $conn;
    private $table_name = 'produit';

    public function __construct($db) {
        $this->conn = $db->conn;
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

    public function insertData($name, $description, $price, $stock,$category,$etat,$file_new) {
        $query = "INSERT INTO " . $this->table_name . " (name,description, price,stock,category,etat,image_path) VALUES (:value1, :value2, :value3, :value4, :value5, :value6, :value7)";
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
}

?>