<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>
    <link rel="stylesheet" href="css/panier.css">
    <link rel="stylesheet" href="css/produits.css">
</head>
<body>

    <section class="panier">

       <div class="fermer"> 
        <img src="/img/c10cf886b8414973bbc0df4ba5ee1e19.png" alt="">
        
        <button class="close"><a href="/produits.html">Fermer</a></button>
        
    </div>

        <div class="container">

            <div class="head">
            
                <h1>Vos Articles</h1>
                <h1>prix Total: <span>500$</span></h1>
        
            </div>
                <div class="card">
                    <img src="img/savon.jpg" alt="">
                    <div class="content">
                        <h3>Détergent Naturel</h3>
                        <h3>prix: <span>10$</span></h3>
                        <label for="quantity">Quantité:</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1">
                        
                    </div>
                    <div class="annuler">
                        <button class="sup">X</button>
                    </div>
                </div>

                <div class="card">
                    <img src="img/vinaigre.jpg" alt="">
                    <div class="content">
                        <h3>vinaigre blanc</h3>
                        <h3>prix: <span>15$</span></h3>
                        <label for="quantity">Quantité:</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1">
                        
                    </div>
                    <div class="annuler">
                        <button class="sup">X</button>
                    </div>
                </div>

                <div class="bt"><a href="#" class="btn">Payer par stripe</a></div>
        </div>

    </section>
    

</body>
</html>

