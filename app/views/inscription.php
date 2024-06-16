<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="/ecoservices/public/css/inscription.css">
</head>
<body>

    <section id="Connexion" class="connexion">

        <div class="connexion-contain">
            <div class="logo">
                <img src="/ecoservices/public/img/c10cf886b8414973bbc0df4ba5ee1e19.png" alt="">
              </div>
    
            <div class="contact-head">
        
             <h1>Inscription</h1>
            </div>
       
            <div class="form">
       
             <form action="/ecoservices/public/submitinscription" method="post">
               <div><input type="text" name="name" id="username" placeholder="username" required></div>
               <div><input type="email" name="email" id="Email" placeholder="email"></div>
               <div><input type="password" name="password" id="password" placeholder="Mot de passe"></div>
             
              <div> <select name="user_type" id="user_type" required >
              <option value="particulier"> </option>
                <option value="particulier">Particulier</option>
                <option value="professionnel">Professionnel</option>
              </select>
            </div>

               <p>j'ai deja un compte? 
                  <a href="connexion"> se connecter</a>
              </p>
               <div class="submit">
                 <input type="submit" value="Inscription" class="btn btn1 btn-submit">
               </div>
             </form>
       
            </div>
        </div>
   
   
       </section>
   
    
</body>
</html>