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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listes des produits</title>
    <link rel="stylesheet" href="/ecoservices/public/css/style.css">
    <link rel="stylesheet" href="/ecoservices/public/css/produits.css">
    <link rel="stylesheet" href="/ecoservices/public/css/media.css">
</head>
<body>

    <div class="header-container">
        <div class="logo">
          <img src="img/c10cf886b8414973bbc0df4ba5ee1e19.png" alt="">
        </div>
        <ul class="navbar">
          <li><a href="home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#portfolio">portfolio</a></li>
          <li><a href="/panier.html">Panier</a>
            <span class="indice">3</span>
        </li>
        </ul>
  
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
    </div>

  
      <ul class="navbars">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#portfolio">portfolio</a></li>
        <li><a href="/panier.html">Panier</a>
      </ul>


     
      <section class="products">
        
        <div class="products-head">
            <h1>Nos Produits Écoresponsables</h1>
            <p>Découvrez notre gamme de produits écoresponsables conçus pour un mode de vie zéro déchet et durable.</p>
        </div>



            <div id="products" class="product-category">
                
         


           <h2>Produits pour la Maison</h2>
                <div class="product-grid">
               <?php
                      $sql = "SELECT * FROM produit where category='Produits pour la Maison' and etat='disponible'";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            ?>
                     <div class="product-card">
                    <img src="img/<?php echo $row["image_path"];?>" alt="">'
                    <h3><?php echo $row["name"];?></h3>;
                    <h4>En stock <?php echo $row["stock"];?></h4>
                    <h4><?php echo $row["price"];?></h4>
                    <label for="quantity">Quantité:</label>
                    <input type="number" id="quantity" name="quantity" min="1" value="1">
                    <p><?php echo $row["description"];?></p>
                    <button type="#">Add to cart</button>
                </div>
                <?php
                        }
                } else {
                   echo" <p class='mess'> Aucune information trouvee </p>";
                }
                 // Fermer la connexion à la base de données
   
             
                 ?>
                </div>
               
            </div>

           <!-----------------------------------------------------------------------  -->

           <div id="products" class="product-category">
                
         


                <h2>Produits pour le Quotidien</h2>
                     <div class="product-grid">
                    <?php
                           $sql = "SELECT * FROM produit where category='Produits pour le Quotidien' and etat='disponible'";
                           $result = $conn->query($sql);
     
                           if ($result->num_rows > 0) {
                             while($row = $result->fetch_assoc()) {
     
                                 ?>
                          <div class="product-card">
                         <img src="img/<?php echo $row["image_path"];?>" alt="">'
                         <h3><?php echo $row["name"];?></h3>;
                         <h4>En stock <?php echo $row["stock"];?></h4>
                         <h4><?php echo $row["price"];?></h4>
                         <label for="quantity">Quantité:</label>
                         <input type="number" id="quantity" name="quantity" min="1" value="1">
                         <p><?php echo $row["description"];?></p>
                         <button type="#">Add to cart</button>
                     </div>
                     <?php
                             }
                     } else {
                        echo" <p class='mess'> Aucune information trouvee </p>";
                     }
                      // Fermer la connexion à la base de données
        
                  
                      ?>
                     </div>
                    
                 </div>
     
                <!-----------------------------------------------------------------------  -->

                
           <div id="products" class="product-category">
                
         


                <h2>Produits pour les Bébés et Enfants</h2>
                     <div class="product-grid">
                    <?php
                           $sql = "SELECT * FROM produit where category='Produits pour les Bébés et Enfants' and etat='disponible'";
                           $result = $conn->query($sql);
     
                           if ($result->num_rows > 0) {
                             while($row = $result->fetch_assoc()) {
     
                                 ?>
                          <div class="product-card">
                         <img src="img/<?php echo $row["image_path"];?>" alt="">'
                         <h3><?php echo $row["name"];?></h3>;
                         <h4>En stock <?php echo $row["stock"];?></h4>
                         <h4><?php echo $row["price"];?></h4>
                         <label for="quantity">Quantité:</label>
                         <input type="number" id="quantity" name="quantity" min="1" value="1">
                         <p><?php echo $row["description"];?></p>
                         <button type="#">Add to cart</button>
                     </div>
                     <?php
                             }
                     } else {
                        echo" <p class='mess'> Aucune information trouvee </p>";
                     }
                      // Fermer la connexion à la base de données
        
                  
                      ?>
                     </div>
                    
                 </div>
     
                <!-----------------------------------------------------------------------  -->


                <div id="products" class="product-category">
                
         


                <h2>Produits pour les Animaux</h2>
                     <div class="product-grid">
                    <?php
                           $sql = "SELECT * FROM produit where category='Produits pour les Animaux' and etat='disponible'";
                           $result = $conn->query($sql);
     
                           if ($result->num_rows > 0) {
                             while($row = $result->fetch_assoc()) {
     
                                 ?>
                          <div class="product-card">
                         <img src="img/<?php echo $row["image_path"];?>" alt="">'
                         <h3><?php echo $row["name"];?></h3>;
                         <h4>En stock <?php echo $row["stock"];?></h4>
                         <h4><?php echo $row["price"];?></h4>
                         <label for="quantity">Quantité:</label>
                         <input type="number" id="quantity" name="quantity" min="1" value="1">
                         <p><?php echo $row["description"];?></p>
                         <button type="#">Add to cart</button>
                     </div>
                     <?php
                             }
                     } else {
                        echo" <p class='mess'> Aucune information trouvee </p>";
                     }
                      // Fermer la connexion à la base de données
        
                  
                      ?>
                     </div>
                    
                 </div>
     
                <!-----------------------------------------------------------------------  -->


                <div id="products" class="product-category">
                
         


                <h2>Emballages Réutilisables</h2>
                     <div class="product-grid">
                    <?php
                           $sql = "SELECT * FROM produit where category='Emballages Réutilisables' and etat='disponible'";
                           $result = $conn->query($sql);
     
                           if ($result->num_rows > 0) {
                             while($row = $result->fetch_assoc()) {
     
                                 ?>
                          <div class="product-card">
                         <img src="img/<?php echo $row["image_path"];?>" alt="">'
                         <h3><?php echo $row["name"];?></h3>;
                         <h4>En stock <?php echo $row["stock"];?></h4>
                         <h4><?php echo $row["price"];?></h4>
                         <label for="quantity">Quantité:</label>
                         <input type="number" id="quantity" name="quantity" min="1" value="1">
                         <p><?php echo $row["description"];?></p>
                         <button type="#">Add to cart</button>
                     </div>
                     <?php
                             }
                     } else {
                        echo" <p class='mess'> Aucune information trouvee </p>";
                     }
                      // Fermer la connexion à la base de données
        
                  
                      ?>
                     </div>
                    
                 </div>
     
                <!-----------------------------------------------------------------------  -->

            <?php $conn->close()?>

     </section>


     <div class="panier">

        sdsdsdsddsd
     </div>


     

      <script src="js/script.js"></script>
</body>
</html>