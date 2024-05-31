<?php
include('../partials/header.php');
?> 
<main>
      
      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
            <br><br>
              <h2>Ďakujeme za vyplnenie formulára</h2>
              <br><br>
               <?php
                  //print_r($_POST);
                  //$conn = db_connection();
                  $contact_object = new Contact();
                  $contact_object->insert();
               ?>
          </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('../partials/footer.php')
?> 