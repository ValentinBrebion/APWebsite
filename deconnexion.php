<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
</html>
<?php 

echo '<div class="card mx-auto" style="width: 18rem;">
<div class="card-body">
  <h5 class="card-title">INFORMATION</h5>
  <p class="card-text">Deconnexion en cours .. Patientez</p>
 
</div>
</div>';
session_start();
session_destroy();

header("Refresh: 3; url=index.php");


?>