<?php require 'header.php'; ?>
<?php
if(isset($_POST['mdp']))
{


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


$query = $cnx->prepare("select * from users where mail = '".$_POST['mail']."' and mdp = '".$_POST['mdp']."';");
$query->execute();
$audemars = $query->fetchAll(PDO::FETCH_ASSOC);
if(count($audemars)>0)
{
    $_SESSION['mail'] = $audemars[0]['mail'];
    header('Location:index.php');
    
}
else
{
    header('Location:vue.php');
}
}

?>
<body>

<!-- Section: Design Block -->
<section class=" text-center text-lg-start">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
  </style>
  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="https://www.audemarspiguet.com/content/dam/ap/com/homepage/2022/starwheel/carouselHP_complicationPush_1920x2542_starwheel.jpg.transform.apcarouselv.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">

        <form action="vu.php" method="post">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form2Example1" class="form-control" name="mail"/>
              <label class="form-label" for="form2Example1">Adresse e-mail</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form2Example2" class="form-control" name="mdp" />
              <label class="form-label" for="form2Example2">Mot de passe</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31">Souviens-toi de moi </label>
                </div>
              </div>

              <div class="col">
                <!-- Simple link -->
                <a href="#!"></a>
              </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">S'identifier </button>


          </form>

        </div>
      </div>
    </div>
  </div>



</section>

<?php require 'footer.php'; ?>
<!-- Section: Design Block -->