<html>
<head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
      
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

</html>
<?php 


 session_start();
 $user = $_POST['username'];
 $_SESSION['username']=$user;
 
     $servername = 'localhost';
     $dbname = 'tpslam3versioning';
     $username = 'root';
     $password = '';
 
     try{
         $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
         
         $user=strip_tags($_POST['username']);
         $pass=strip_tags($_POST['password']);
 
 
         $requete = $conn->prepare("SELECT LoginUser,MdpUser FROM utilisateur WHERE LoginUser = :nameuser AND MdpUser = PASSWORD(:pass)");
 
         $requete->bindValue(':nameuser',$user, PDO::PARAM_STR);
         $requete->bindValue(':pass',$pass, PDO::PARAM_STR);
         $requete->execute();
 
         if($requete->rowCount()==0){
          echo '<div class="card mx-auto" style="width: 18rem;">
   <div class="card-body">
     <h5 class="card-title">INFORMATION</h5>
     <p class="card-text">La requète n\'a retourné aucun résultat ! Veuillez ressayer</p>
    
   </div>
 </div>';
         
                  header("Refresh: 3; url=inscription.php");
 
         }else{
             echo '<div class="card mx-auto" style="width: 18rem;">
   <div class="card-body">
     <h5 class="card-title">INFORMATION</h5>
     <p class="card-text">Vous êtes connecté ! Veuillez patienter, vous allez être redirigé...</p>
    
   </div>
 </div>';
       
           
         }
 
     }catch(PDOException $e){
         echo "Erreur".$e->getMessage();
         die;
     }
 
 
?>