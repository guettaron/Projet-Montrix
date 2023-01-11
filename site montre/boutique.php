<?php require 'header.php'; ?>


    <H1 class="text-center" > <U>MONTRES DE LUXE </U><h1>
      <H6 class="text-center text-secondary fs-6" > MARQUES HORLOGÈRES DE PRESTIGE</h6><br>



    <!--<div class="row row-cols-md-4 row-cols-md-3 g-5">

      <div class="col">
        <div class="card">
          <img src="calentar.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="text-center">Patek-Philipe Calendar</h5>
            <h6 class="text-center text-secondary fs-6">99 200,00€</h6>


            
             
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card">
          <img src="rm-052-skull.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="text-center">Richard Mille RM 052  </h5>
            <h6 class="text-center text-secondary fs-6">390 000,00€</h6>
          </div>
        </div>  
      </div> 



      <div class="col">
        <div class="card">
          <img src="max_audemars-piguet-royal-oak-concept-black-panther-flying-tourbillon.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="text-center">Audemars Piquet Black Panther</h5>
            <h6 class="text-center text-secondary fs-6">170 000,00€</h6>
           
              
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="Richard mile tourbillion.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="text-center"> Richard mile tourbillion</h5>
            <h6 class="text-center text-secondary fs-6">765 000,00€</h6>
           
          </div>
        </div><br>
      </div>





      <div class="col">
        <div class="card">
          <img src="Nautilus.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="text-center">Patek-Philipe Nautilus </h5>
            <h6 class="text-center text-secondary fs-6">125 000,00€</h6>
            
           
          </div>
        </div>
      </div>


      


      <div class="col">
        <div class="card">
          <img src="daytona.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="text-center">Rolex Daytona Paul Newman Belmondo </h5>
            <h6 class="text-center text-secondary fs-6">185 000,00€</h6>
            
           
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="DIVER.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="text-center">Audemars Piquet Royal OAK Offshore</h5>
            <h6 class="text-center text-secondary fs-6">83 000,00€</h6>
            
           
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card">
          <img src="calibre-de-cartier-astrotourbillon.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="text-center">Cartier Calibre Astrotourbillon </h5>
            <h6 class="text-center text-secondary fs-6">107 000,00€</h6>
            
           
          </div>
        </div>
      </div>



      <div class="col">
        <div class="card">
          <img src="OAG.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="text-center">Audemars Piguet Royal Oak Offshore Diver  </h5>
            <h6 class="text-center text-secondary fs-6">107 000,00€</h6>
            
           
          </div>
        </div>
      </div>



      <div class="col">
        <div class="card">
          <img src="lo-scienziato-luminor-1950-tourbillon-gmt-titanio-47-mm.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="text-center">Panerai Lo Scienziato Luminor  </h5>
            <h6 class="text-center text-secondary fs-6">153 000,00€</h6>
            
           
          </div>
        </div>
      </div>



      





      <div class="col">
        <div class="card">
          <img src="br-x1-skeleton-tourbillon.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="text-center">Bell Ross Experimental   </h5>
            <h6 class="text-center text-secondary fs-6">280 000,00€</h6>
          
    </div>

  -->







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


$query = $cnx->prepare("SELECT * from produits ");
$query->execute();
$montre = $query->fetchAll(PDO::FETCH_ASSOC);

?> <div class="container">
<div class="row"><?php
foreach($montre as $m)
{
  
 
        echo '
        <div class="col">
          <div class="card">
            <img src="'. $m['image'].'"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="text-center">'. $m['nom'] .'</h5>
              <h6 class="text-center text-secondary fs-6">'. $m['prix'] .'€</h6>
               
            </div>
          </div>
        </div>
           ';
         
     
  
  
}
?>

<?php require 'footer.php'; ?>
    





</body>
