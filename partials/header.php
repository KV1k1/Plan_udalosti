<?php
  require('../_inc/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php 'Moj web | '. (basename($_SERVER["SCRIPT_NAME"], '.php'));?></title>
  <?php
      add_stylesheet();
  ?>
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <a class="navbar-brand ms-5" href="#"><img src="img/logo.jpg" width="30" height="30">MooN Events</a> 
            <!--logo v navigácii-->

            <div class="container-fluid">
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <p>Menu</p>
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav gap-3">
                  <li class="nav-item">
                    <a class="nav-link active" style="font-weight: bold;" aria-current="page" href="index.php">Domov</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="o_nas.php">O nás</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sluzby.php">Služby & Cenník</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="kontakt.php">Kontakt</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="recenzie.php">Recenzie & Galéria</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>