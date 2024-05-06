<?php
  require('_inc/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php 'MooN Events  | '. (basename($_SERVER["SCRIPT_NAME"], '.php'));?></title>
  <?php
    add_stylesheets();
  ?>
</head>
<body>
 
<?php
$pages = array(
    'Domov' => 'index.php',
    'O nás' => 'o_nas.php',
    'Služby & Cenník' => 'sluzby.php',
    'Kontakt' => 'kontakt.php',
    'Recenzie & Galéria' => 'recenzie.php',
    
);

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    $pages['Odhlásiť sa'] = 'logout.php';
}

$menu_object = new Menu($pages);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand ms-5" href="#"><img src="img/logo.jpg" width="30" height="30">MooN Events</a> 
    <!--logo v navigácii-->

    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <p>Menu</p>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php echo $menu_object->generate_menu(); ?>
            </ul>
        </div>
    </div>
</nav>

