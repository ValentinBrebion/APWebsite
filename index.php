<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1 class="txtconnexion">Connexion</h1>
                <a href="inscription.php"><h1 class="txtinscription">inscription</h1></a>
                
                <div class="contour">
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                </div>
                <?php
                // Code de vérification 
                ?>
            </form>
        </div>
    </body>
</html>