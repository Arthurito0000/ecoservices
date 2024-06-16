<?php
require_once('../models/Database.php');
require_once('../models/DemandeModel.php');

// Initialiser l'objet Database
$db = new Database();
$demandeModel = new DemandeModel($db);

// Vérifier si l'ID du produit est passé en paramètre
$productId = isset($_GET['id']) ? $_GET['id'] : null;
if ($productId) {
    $product = $demandeModel->getProductById($productId);
} else {
    echo "ID du produit manqut.";
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>damande devis</title>
    <link rel="stylesheet" href="/ecoservices/public/css/devis.css">
</head>
<body>

    <section id="Connexion" class="connexion">

        <div class="connexion-contain">
            <div class="logo">
                <img src="/ecoservices/public/img/c10cf886b8414973bbc0df4ba5ee1e19.png" alt="">
              </div>
    
            <div class="contact-head">
        
             <h1>Demande de devis</h1>
            </div>
       
            <div class="form">
       
                <form action="/ecoservices/public/updatedemande" id="quoteRequestForm" method="post">
                    <!-- Informations sur l'entreprise -->
                    <input type="hidden" name="id" value="<?php echo $product->id; ?>">
                    <label for="contact">Nom du contact:</label>
                    <input type="text" id="contact" name="nom"  value="<?php echo $product->nom; ?>">
                   
                    <label for="company">Nom de l'entreprise:</label>
                    <input type="text" id="company" name="company" value="<?php echo $product->entreprise; ?>">
                    
               
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $product->email; ?>">
                    
                    <label for="phone">Téléphone:</label>
                    <input type="tel" id="phone" name="phone" value="<?php echo $product->telephone; ?>">
                    
                    <!-- Sélection du service -->
                    <label for="service">Service souhaité:</label>
                    <select id="serviced" name="service">
    
                        <option value="collecte-recyclage-dechets" <?php echo ($product->service == 'Collecte et Recyclage des Déchets Électroniques et Électriques') ? 'selected' : ''; ?>>Collecte et Recyclage des Dechets Electroniques et Electriques</option>
                        <option value="gestion-dechets-industriels" <?php echo ($product->service == 'Gestion des Dechets Industriels') ? 'selected' : ''; ?>>Gestion des Dechets Industriels</option>
                        <option value="destruction-securisee-documents" <?php echo ($product->service == '>Destruction Securisee des Documents') ? 'selected' : ''; ?>>Destruction Securisee des Documents</option>
                        <option value="recyclage-equipements-informatiques" <?php echo ($product->service == 'Recyclage des Equipements Informatiques') ? 'selected' : ''; ?>>Recyclage des Equipements Informatiques</option>
                        <option value="solutions-compostage" <?php echo ($product->service == 'Solutions de Compostage pour Entreprises') ? 'selected' : ''; ?>>Solutions de Compostage pour Entreprises</option>
                        <option value="formation-sensibilisation" <?php echo ($product->service == 'Formation et Sensibilisation en Entreprise') ? 'selected' : ''; ?>>Formation et Sensibilisation en Entreprise</option>
                    </select>
                    
                    <!-- Détails supplémentaires -->
                    <label for="details">Détails supplémentaires:</label>
                    <textarea id="details" name="details"><?php echo $product->description; ?></textarea>

                    <label for="service">Etat de la commande:</label>
                    <select id="serviced" name="etat">
                        <option value="en attente" <?php echo ($product->etat == 'en attente') ? 'selected' : ''; ?>  >en attente</option>
                        <option value="traitement encours" <?php echo ($product->etat == 'traitement encours ') ? 'selected' : ''; ?>>traitement en cours</option>
                        <option value="demande traitee" <?php echo ($product->etat == 'demande traite') ? 'selected' : ''; ?>>demande traitee</option>
                        
                    </select>
                    
                    <!-- Bouton de soumission -->
                    <div class="submit">
                        <input type="submit" value="Sauvegarder" class="btn btn1 btn-submit">
                      </div>
                </form>
       
            </div>
        </div>
   
   
       </section>
   
    
</body>
</html>