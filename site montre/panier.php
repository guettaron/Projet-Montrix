<?php require 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="panier.css">
    <title></title>
</head>

</html>
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



$query = $cnx->prepare("SELECT * from panier as a, produits as b  WHERE a.id_produit=b.id");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $r)
{
    echo '<table class="table">
    <th>Image</th><th>Nom</th><th>Prix</th>
    <tr>
         <td>
           <img id="imgPanier" src="'.$r['image'].'">
        </td>
        <td>
           <p>'.$r['nom'].'</p>
        </td>
        <td>
        <p>'.$r['prix'].'</p>
        </td>
    </tr>
</table>';
}
?>

<form method="post">
    <div id="btn">
<button type="submit" id="confirm-command">Passer la commande</button>
</div>
</form>






<?php require 'footer.php'; ?>