<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <!-- CSS only -->
    </head>
    <body>
        <div id="container" >
            
            <!-- zone de connexion -->
            <div class="menuconninscri">

                
            
            
            
            <!--form ancien form-->
            <form action="verification.php" method="POST">
                <h1 class="txtconnexion">Connexion</h1>
                <a href="inscription.php"><h1 class="txtinscription">inscription</h1></a>
</div>
                
                <div class="containerconn">
                
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required><br>
                
                <div class="namemdp">
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required><br>
                </div>

                <input type="submit" class="btnsub" id='submit' value='LOGIN' >
                </div>
                <?php
                // Code de vérification 
                ?>
            </form>
        </div>
    </body>
</html>