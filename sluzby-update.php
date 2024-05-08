<?php
include_once('partials/header.php');

$service_object = new Table();
$service_data = null;

if(isset($_POST['edit_service'])) {
    $edit_service_id = $_POST['edit_service'];
    $service_data = $service_object->select_single($edit_service_id);
}

if($service_data) {
    // Vyplnenie údajov do formulára
    $typ = $service_data->event_type;
    $pocet = $service_data->participants_min . " - " . $service_data->participants_max;
    $trvanie = $service_data->duration;
    $ceny = $service_data->price_min . " - " . $service_data->price_max;
}


if(isset($_POST['edit_service_id'], $_POST['typ'], $_POST['pocet'], $_POST['trvanie'], $_POST['ceny'])) {
    $edit_service_id = $_POST['edit_service_id'];
    
    list($price_min, $price_max) = explode("-", $_POST['ceny']);
    list($participants_min, $participants_max) = explode("-", $_POST['pocet']);
    
    $new_data = array(
        'event_type' => $_POST['typ'],
        'participants_min' => $participants_min,
        'participants_max' => $participants_max,
        'duration' => $_POST['trvanie'],
        'price_min' => $price_min,
        'price_max' => $price_max
    );

    $service_object->edit($edit_service_id, $new_data);

    header('Location: admin.php');
    exit();
}
?> 
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-center">
                <form action="sluzby-update.php" method="POST">
                    <label for="typ">Typ:</label>
                    <br>
                    <input type="text" id="typ" name="typ" value="<?php echo $typ ?? '' ?>">
                    <br>
                    <label for="pocet">Pocet:</label>
                    <br>
                    <input type="text" id="pocet" name="pocet" value="<?php echo $pocet ?? '' ?>">
                    <br>
                    <label for="trvanie">Trvanie:</label>
                    <br>
                    <input type="text" id="trvanie" name="trvanie" value="<?php echo $trvanie ?? '' ?>">
                    <br>
                    <label for="ceny">Ceny:</label>
                    <br>
                    <input type="text" id="ceny" name="ceny" value="<?php echo $ceny ?? '' ?>">
                    <br>

                    <input type="hidden" name="edit_service_id" value="<?php echo $edit_service_id ?? '' ?>">
                    <button type="submit">Uložiť zmeny</button>
                </form>
            </div>
        </div>
    </section>
</main>
    
<?php
include_once('partials/footer.php');
?>
