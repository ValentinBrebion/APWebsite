<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- CSS only -->

    </head>
   </html> 
<?php
session_start();

    $servername = 'localhost';
    $dbname = 'tpslam3versioning';
    $username = 'root';
    $password = '';
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        
        $login=strip_tags($_POST['login']);
        $pass=strip_tags($_POST['password']);
        $mail = strip_tags($_POST['Email']);
        $dateauj = date('d-m-Y');

        $timestamp = strtotime($dateauj); 
        $newDate = date("Y-m-d", $timestamp);

        $select = $conn->prepare("SELECT LoginUser FROM utilisateur");
        $select->execute();

        if($select == $login){ // si nom utilisateur est le meme dans BDD
          echo '<div class="card mx-auto" style="width: 18rem;">
   <div class="card-body">
     <h5 class="card-title">INFORMATION</h5>
     <p class="card-text">Login déjà pris !</p>
    
   </div>
 </div>';//tu affiches non

 header("Refresh:3; url=inscription.php");
        }else{//sinon oui
          $requete = $conn->prepare("INSERT INTO utilisateur VALUES(NULL,?,PASSWORD(?),?,?)");
          $requete->execute([$login,$pass,$newDate,$mail]);

       

        if($requete){
        
            echo '<div class="card mx-auto" style="width: 18rem;">
   <div class="card-body">
     <h5 class="card-title">INFORMATION</h5>
     <p class="card-text">Insertion faites dans la BDD Veuillez patienter, vous allez être redirigé...</p>
    
   </div>
 </div>';
            header("Refresh: 5; url=index.php");
          }else{
            echo '<div class="card mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">INFORMATION</h5>
              <p class="card-text">Erreur ! problème d\'insertion dans la bdd</p>
             
            </div>
          </div>';

          header("Refresh: 5; url=inscritpion.php");
          }
        }

      

       
        
          
        

    }catch(PDOException $e){
        
    }

?>