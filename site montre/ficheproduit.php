<?php require 'header.php'; ?>




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
    // echo "coucou";
  }
} catch (PDOException $e) {
  die('Erreur :' . $e->getMessage());
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$query = $cnx->prepare("SELECT * from produits WHERE id = $id ;");
$query->execute();
$prod = $query->fetchAll(PDO::FETCH_ASSOC);

?> <div class="container">
<div class="row">
<?php
foreach($prod as $p)
{
  
 
        echo '
        <form method="POST">
        <div class="embed-responsive-16by9">
        <div class="row">
          <div class="col">
            <img class="embed-responsive-item" src="' . $p['image'] . '" allowfullscreen width="65%;" height="85%; "/>
          </div>
          <div class="col">
            <p class="font-weight-uppercase" style="font-size: 30px;">'.$p['nom'].'</p>
            <p class="font-weight-uppercase text-secondary" style="font-size: 22px;">'.$p['prix'].'€</p>
            <p class="text-black">'.$p['description'].'</p>
            <br>
            <input type="submit" name="btnAjouter" class="btn btn-dark" value="Ajouter Au Panier">
            <br>
          </div>
        </div>
        </div>
        </form>

           ';

}

if(isset($_POST['btnAjouter']))
{
  $query ="INSERT INTO panier (`id_produit`)  VALUES (".$_GET['id'].") ;";
  $stmt = $cnx->prepare($query);
  $stmt->execute();
}
?>

</div>
        </div>

<?php require 'footer.php'; ?>

</body>
</html>

