<DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ficheProduit.css">
    <title>Montrix</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <a class="navbar-brand" href="boutique.php">
            <img src="MONTRIX.png" id="logo">
          </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">ACCUEIL</a>
                </li>
                <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">BOUTIQUE</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item text-center" href="Audemars_Piguet.php">Audemars Piguet</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-center" href="Patek-Philippe.php">Patek-Philippe</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-center" href="Richard_Mille.php">Richard Mille</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-center" href="Jacob_&_Co.php">Jacob & Co</a></li>
              <li><hr class="dropdown-divider"></li>
             
            </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="nosservices.php">NOS SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">CONTACT</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="apropos.php">A PROPOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="panier.php">PANIER</a>
                </li>
              </ul>
            </div>

    </nav>


<H1 class="text-center" > <U>PATEK-PHILIPPE</U><h1>

<br>


<?php
$dsn = 'mysql:dbname=montre;host=localhost';
$login = 'root';
$mdp = 'root';

try {
  $cnx = new PDO($dsn,$login,$mdp, 
  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));

  if($cnx)
  {
    //echo "coucou";
  }
} catch (PDOException $e) {
  die('Erreur :' . $e->getMessage());
}


$query = $cnx->prepare("SELECT * from produits WHERE nom like '%patek%'");
$query->execute();
$audemars = $query->fetchAll(PDO::FETCH_ASSOC);

?> <div class="container">
<div class="row">
<?php
foreach($audemars as $a)
{
  
 
        echo '
        <div class="col">
        <div class="card">
        <a href="ficheProduit.php?id='.$a['id'].'">
            <img src="'. $a['image'].'"class="card-img-top" alt="...">
        </a>
            <div class="card-body">
              <h5 class="text-center">'. $a['nom'] .'</h5>
              <h6 class="text-center text-secondary fs-6">'. $a['prix'] .'€</h6>
               
            </div>
          </div>
        </div>
           ';
     
  
  
}

 require 'footer.php'; 
?>



</body>

