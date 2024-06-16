<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: /ecoservices/app/views/connexion_professionel.php");
    exit();
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
       
                <form action="/ecoservices/public/submitdemande" id="quoteRequestForm" method="post">
                    <!-- Informations sur l'entreprise -->
                   
                    <label for="contact">Nom:</label>
                    <input type="text" id="contact" name="nom">
                   
                    <label for="company">Nom de l'entreprise:</label>
                    <input type="text" id="company" name="company">
                    
               
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                    
                    <label for="phone">Téléphone:</label>
                    <input type="tel" id="phone" name="phone">
                    
                    <!-- Sélection du service -->
                    <label for="service">Service souhaité:</label>
                    <select id="serviced" name="service">
                        <option value="collecte-recyclage-dechets"> </option>
                        <option value="collecte-recyclage-dechets">Collecte et Recyclage des Déchets Électroniques et Électriques</option>
                        <option value="gestion-dechets-industriels">Gestion des Déchets Industriels</option>
                        <option value="destruction-securisee-documents">Destruction Sécurisée des Documents</option>
                        <option value="recyclage-equipements-informatiques">Recyclage des Equipements Informatiques</option>
                        <option value="solutions-compostage">Solutions de Compostage pour Entreprises</option>
                        <option value="formation-sensibilisation">Formation et Sensibilisation en Entreprise</option>
                    </select>
                    
                    <!-- Détails supplémentaires -->
                    <label for="details">Détails supplémentaires:</label>
                    <textarea id="details" name="details"></textarea>
                    
                    <!-- Bouton de soumission -->
                    <div class="submit">
                        <input type="submit" value="Envoyer" class="btn btn1 btn-submit">
                      </div>
                </form>
       
            </div>
        </div>
   
   
       </section>
   
    
</body>
</html>