
<?php
     
class DemandeModel {
    private $conn;
    private $table_name = 'demande_devis';

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

    public function insertData($entreprise, $nom, $eamil, $telephone,$service,$description) {
        $query = "INSERT INTO " . $this->table_name . " (nom,entreprise,email,telephone,service,description) VALUES (:value1, :value2, :value3, :value4, :value5, :value6)";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':value1', $nom);
        $stmt->bindParam(':value2', $entreprise);
        $stmt->bindParam(':value3', $eamil);
        $stmt->bindParam(':value4', $telephone);
        $stmt->bindParam(':value5', $service);
        $stmt->bindParam(':value6', $description);
   

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}

?>