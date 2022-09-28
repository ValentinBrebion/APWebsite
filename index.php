<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <!-- CSS only -->

    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->

           



<form action="verification.php" method="POST">
                <h1 class="txtconnexion">Connexion</h1>
                <a href="inscription.php"><h1 class="txtinscription">inscription</h1></a>
                
               
                <div class="contour">
                <form class="row gx-3 gy-2 align-items-center mx-auto">
  
  <div class="col-auto">
    <input type="text" placeholder="mettez votre identifiant"  name="username"><br><br>
    <input type="password" placeholder="mettez votre mot de passe" name="password"><br>
  </div>
  <div class="col-auto">
  
  <button type="submit" class="btn btn-warning">Login</button>
  </div>
  </div>
</form>
              

                
                
                

               
                </div>
                <?php
                // Code de vérification 
                ?>
            </form>
        </div>
    </body>
</html>