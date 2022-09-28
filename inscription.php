<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <!-- CSS only -->

    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="envoieinscri.php" method="POST">
                <h1 class="txtconnexion">Inscription</h1>
                
                <div class="contour">
                
                <label><b>Votre login</b></label>
                <input type="text" placeholder="Entrez votre login" name="login" required><br>
                
                <div class="namemdp">
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer votre mot de passe" name="password" required><br>
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