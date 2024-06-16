
<?php
     


class InscriptionModel {
    private $conn;
    private $table_name = 'inscription';

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

    public function insertData($name, $email, $password, $user_type) {
        $query = "INSERT INTO " . $this->table_name . " (nom,email, password,user_type) VALUES (:value1, :value2, :value3, :value4)";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':value1', $name);
        $stmt->bindParam(':value2', $email);
        $stmt->bindParam(':value3', $password);
        $stmt->bindParam(':value4', $user_type);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}

?>