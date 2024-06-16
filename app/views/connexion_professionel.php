<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="/ecoservices/public/css/connexion.css">
    <style>
      .error{
        color:red;
        background-color:rgba(55,0,0,0.2);
      }
      .mes{
        height:50px;
        background-color:#250821;
        width:100%;
        border-radius:10px;
        color:white;
        text-align:center;
      }
    </style>
</head>
<body>

    <section id="Connexion" class="connexion">

        <div class="connexion-contain">
            <div class="logo">
                <img src="/ecoservices/public/img/c10cf886b8414973bbc0df4ba5ee1e19.png" alt="">
              </div>

              <div class="mes">
                les demandes de devis sont reservees uniquement pour les comptes professionnels
              </div>
    
            <div class="contact-head">
        
             <h1>Connexion au Compte</h1>

             <?php if (isset($_GET['error'])): ?>
        <p class="error">Username ou mot de passe incorrect</p>
    <?php endif; ?>
            </div>
       
            <div class="form">
            
             <form action="/ecoservices/config/professionnel_login_process.php" method="POST">
            
               <div><input type="text" name="username" id="Email" placeholder="username"></div>
               <div><input type="password" name="password" id="password" placeholder="Mot de passe"></div>
              <p>Vous n'avez pas de compte? 
                  <a href="inscription"> Creer un compte</a>
              </p>
               <div class="submit">
                 <input type="submit" value="connexion" class="btn btn1 btn-submit">
               </div>
             </form>
       
            </div>
        </div>
   
   
       </section>
   
    
</body>
</html>