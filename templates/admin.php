<?php
include_once('../partials/header.php');

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
  header('Location: 404.php');
  exit();
}
?> 

<main class="bgindex">    
  <section class="container">
    <div class="row">
      <div class="col-100 text-center">
        <h1>Admin rozhranie</h1>
              
        <?php
        if($_SESSION['is_admin'] == 1){
          include_once('../partials/admin-kontakt.php');
          include_once('../partials/admin-sluzby.php');
          include_once('../partials/admin-reviews.php');
        }
        ?>
      </div>
    </div>
  </section>
</main>
    
<?php
include_once('../partials/footer.php');
?>
