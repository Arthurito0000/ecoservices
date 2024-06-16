
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/PHPMailer/PHPMailer/src/Exception.php';
require '../vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require '../vendor/PHPMailer/PHPMailer/src/SMTP.php';
require '../vendor/autoload.php';
     
class DemandeModel {//ghfgfgfgfhgfgfg
    private $conn;
    private $table_name = 'demande_devis';

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

    public function getProductById($id) {//fgfg
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }


    public function insertData($entreprise, $nom, $email, $telephone,$service,$description,$etat) {
        $query = "INSERT INTO " . $this->table_name . " (nom,entreprise,email,telephone,service,description,etat) VALUES (:value1, :value2, :value3, :value4, :value5, :value6, :value7)";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':value1', $nom);
        $stmt->bindParam(':value2', $entreprise);
        $stmt->bindParam(':value3', $email);
        $stmt->bindParam(':value4', $telephone);
        $stmt->bindParam(':value5', $service);
        $stmt->bindParam(':value6', $description);
        $stmt->bindParam(':value7', $etat);
   

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }


    public function updateData($id, $entreprise, $nom, $email, $telephone,$service,$description,$etat) {//
        $query = "UPDATE " . $this->table_name . " SET nom = :value1, entreprise = :value2, email = :value3, telephone = :value4, service = :value5, description = :value6, etat = :value7 WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':value1', $nom);
        $stmt->bindParam(':value2', $entreprise);
        $stmt->bindParam(':value3', $email);
        $stmt->bindParam(':value4', $telephone);
        $stmt->bindParam(':value5', $service);
        $stmt->bindParam(':value6', $description);
        $stmt->bindParam(':value7', $etat);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }


    private function sendEmail($entreprise, $service, $description,$email) {
        $mail = new PHPMailer(true);
        try {
            // Configuration du serveur
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Remplacez par votre hôte SMTP
            $mail->SMTPAuth = true;
            $mail->Username = 'ecoservicefrance33@gmail.com'; // Remplacez par votre email
            $mail->Password = ''; // Remplacez par votre mot de passe
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 465;

            // Destinataires
            $mail->setFrom('ecoservicefrance33@gmail.com', 'Eco-services');
            $mail->addAddress('arthurotamboula10@gmail.com'); // Remplacez par l'email de l'administrateur

            // Contenu de l'email
            $mail->isHTML(true);
            $mail->Subject = 'Nouvelle demande de devis';
            $mail->Body = "<p>Une nouvelle demande de devis a été faite par l'entreprise <strong>$entreprise</strong>.</p>
                           <p><strong>Service demandé :</strong> $service</p>
                           <p><strong>Description :</strong> $description</p>
                           <p><strong>adresse mail de l'entreprise :</strong> $email</p>";

            $mail->send();
        } catch (Exception $e) {
            echo "Le message n'a pas pu être envoyé. Erreur de Mailer : {$mail->ErrorInfo}";
        }
    }
}

?>