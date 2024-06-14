<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gérer les produits</title>


    <link rel="stylesheet" type="text/css" href="/ecoservices/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/ecoservices/public/css/fontawesome-free-6.5.1-web/css/all.css" />
    <link rel="stylesheet" type="text/css" href="/ecoservices/public/css/media_produit.css" />

       
</head>
<body>

<div class="header-container">
      <div class="logo">
        <img src="img/c10cf886b8414973bbc0df4ba5ee1e19.png" alt="">
      </div>
      <ul class="navbar">
      <li><a href="product">Ajouter un produit</a></li>
        <li><a href="admin_demande">gerer les demandes</a></li>
        <li><a href="#">deconnexion</a></li>
      </ul>

      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

    </div>
    <ul class="navbars">
        <li><a href="product">Ajouter un produit</a></li>
        <li><a href="#">gerer les demandes</a></li>
        <li><a href="#">deconnexion</a></li>
      
    </ul>

<div class="containers">
    <h1 class="text">Gestion des produits</h1>
    
    <?php
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecoservice";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Récupérer les demandes d'inscription aux stages depuis la base de données
    $sql = "SELECT * FROM produit";
    $result = $conn->query($sql);
    $results = $conn->query($sql);

 
       
        echo "<div class='bloc' >";
        echo "<table class='table'>";
        echo "<thead class='thead'><tr ><th>designation</th><th>price</th><th>stock</th><th>category</th><th>etat</th><th>Action</th></tr></thead><tbody>";
       
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr class='bas'><td>".$row["name"]."</td><td>".$row["price"]."</td><td>".$row["stock"]."</td><td>".$row["category"]."</td><td>".$row["etat"]."</td>";
            echo "<td><a href='../app/views/produitUpdate.php?id=" . $row['id'] . "'><i class='fa-solid fa-pencil'></i> Modifier</a></td>";

            echo"</tr>";
        }
        echo "</tbody></table>";


      

    } else {
        echo "<p class='mess'> Aucune information trouvee </p>";
    }

    echo "</div>";

    // Fermer la connexion à la base de données
    $conn->close();
    ?>
</div>


<script src="/ecoservices/public/js/script.js"></script>

</body>
</html>
