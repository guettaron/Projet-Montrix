<?php session_start(); ?>
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
    
    <title>Montrix</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
           <a class="navbar-brand" href="index.php">
            <img src="MONTRIX6.png" id="logo">
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
                <li class="nav-item">
                <?php if(!isset($_SESSION['mail'])){ ?>
                  <a class="nav-link" href="vu.php">CONNEXION</a><?php } else { ?> <a class="nav-link" href="deco.php">DECONNEXION</a>  <?php    } ?>
                </li>
              </ul>
            </div>

    </nav>