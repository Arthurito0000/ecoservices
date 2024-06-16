<?php
require_once('../models/Database.php');
require_once('../models/ProductModel.php');

// Initialiser l'objet Database
$db = new Database();
$productModel = new ProductModel($db);

// Vérifier si l'ID du produit est passé en paramètre
$productId = isset($_GET['id']) ? $_GET['id'] : null;
if ($productId) {
    $product = $productModel->getProductById($productId);
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
    <title>ajouter produit</title>
    <link rel="stylesheet" type="text/css" href="/ecoservices/public/css/ajout_produit.css" />
</head>
<body>

    <section id="Connexion" class="connexion">

        <div class="connexion-contain">
            <div class="logo">
            <img src="/ecoservices/public/img/c10cf886b8414973bbc0df4ba5ee1e19.png" alt="">
              </div>
    
            <div class="contact-head">
        
             <h1>Modifier un produit</h1>
            </div>
       
            <div class="form">
           
   <form action="/ecoservices/public/updateproduit" method="post" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?php echo $product->id; ?>">
    <label for="name">Nom du Produit:</label>
    <input type="text" id="name" name="name" value="<?php echo $product->name; ?>" required>
    
    <label for="description">Description:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required><?php echo $product->description; ?></textarea>
    
    <label for="price">Prix:</label>
    <input type="text" id="price" name="price" step="0.01" min="0" value="<?php echo $product->price; ?>" required>
    
    <label for="stock">Stock:</label>
    <input type="number" id="stock" name="stock" min="0" value="<?php echo $product->stock; ?>" required >
    
    <label for="category">Catégorie:</label>
    <select id="category" name="category" value="<?php echo $product->category; ?>" >
    
         <option value="Produits pour la Maison" <?php echo ($product->category == 'Produits pour la Maison') ? 'selected' : ''; ?>>Produits pour la Maison</option>
         <option value="Produits pour le Quotidien" <?php echo ($product->category == 'Produits pour le Quotidien') ? 'selected' : ''; ?>>Produits pour le Quotidien</option>
         <option value="Produits pour les Bebes et Enfants" <?php echo ($product->category == 'Produits pour les Bebes et Enfants') ? 'selected' : ''; ?>>Produits pour les Bebes et Enfants</option>
         <option value="Produits pour les Animaux" <?php echo ($product->category == 'Produits pour les Animaux') ? 'selected' : ''; ?>>Produits pour les Animaux</option>
         <option value="Emballages Reutilisables" <?php echo ($product->category == 'Emballages Reutilisables') ? 'selected' : ''; ?>>Emballages Reutilisables</option>
    </select>

    <label for="etat">Etat:</label>
    <select id="etat" name="etat" value="<?php echo $product->etat; ?>">
    
        <option value="disponible" <?php echo ($product->etat == 'disponible') ? 'selected' : ''; ?>>disponible</option>
        <option value="non disponible" <?php echo ($product->etat == 'non disponible') ? 'selected' : ''; ?>>non disponible</option>
    </select>
    
    
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/*">
    
    <div class="submit">
                 <input type="submit" value="sauvegarder" class="btn btn1 btn-submit">
               </div>
    </form>


            </div>
        </div>
   
   
       </section>
   
    
</body>
</html>