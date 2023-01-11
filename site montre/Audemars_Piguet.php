<?php require 'header.php'; ?>


<H1 class="text-center" > <U>AUDEMARS PIGUET</U><h1>

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


$query = $cnx->prepare("SELECT * from produits WHERE nom like '%audemars%'");
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