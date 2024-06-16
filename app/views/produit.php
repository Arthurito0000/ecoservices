
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
        
             <h1>Ajouter produit</h1>
            </div>
       
            <div class="form">
       
   <form action="/ecoservices/public/submitproduit" method="post" enctype="multipart/form-data">
    <label for="name">Nom du Produit:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="description">Description:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea>
    
    <label for="price">Prix:</label>
    <input type="text" id="price" name="price" step="0.01" min="0" required>
    
    <label for="stock">Stock:</label>
    <input type="number" id="stock" name="stock" min="0" required>
    
    <label for="category">Catégorie:</label>
    <select id="category" name="category" >
        <option value=" "></option>
        <option value="Produits pour la Maison">Produits pour la Maison</option>
        <option value="Produits pour le Quotidien">Produits pour le Quotidien</option>
        <option value="Produits pour les Bébés et Enfants">Produits pour les Bebes et Enfants</option>
        <option value="Produits pour les Animaux">Produits pour les Animaux</option>
        <option value="Emballages Réutilisables">Emballages Reutilisables</option>
    </select>

    <label for="etat">Etat:</label>
    <select id="etat" name="etat">
        <option value=" "></option>
        <option value="disponible">disponible</option>
        <option value="non disponible">non disponible</option>
    </select>
    
    
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/*">
    
    <div class="submit">
                 <input type="submit" value="Ajouter" class="btn btn1 btn-submit">
               </div>
    </form>

       
            </div>
        </div>
   
   
       </section>
   
    
</body>
</html>