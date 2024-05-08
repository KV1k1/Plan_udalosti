<?php
include_once('partials/header.php');

$service_object = new Table();

if(isset($_POST['add_service'])) {
    $new_data = array(
        'event_type' => $_POST['typ'],
        'participants_min' => $_POST['pocet_min'],
        'participants_max' => $_POST['pocet_max'],
        'duration' => $_POST['trvanie'],
        'price_min' => $_POST['ceny_min'],
        'price_max' => $_POST['ceny_max']
    );

    $service_object->insert($new_data);

    header('Location: admin.php');
    exit();
}
?> 

<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-center">
                <form action="sluzby-add.php" method="POST">
                    <label for="typ">Typ:</label>
                    <br>
                    <input type="text" id="typ" name="typ" value="">
                    <br>
                    <label for="pocet">Počet účastníkov (Min):</label>
                    <br>
                    <input type="text" id="pocet" name="pocet_min" value="">
                    <br>
                    <label for="pocet">Počet účastníkov (Max):</label>
                    <br>
                    <input type="text" id="pocet" name="pocet_max" value="">
                    <br>
                    <label for="trvanie">Trvanie:</label>
                    <br>
                    <input type="text" id="trvanie" name="trvanie" value="">
                    <br>
                    <label for="ceny">Cena (Min):</label>
                    <br>
                    <input type="text" id="ceny" name="ceny_min" value="">
                    <br>
                    <label for="ceny">Cena (Max):</label>
                    <br>
                    <input type="text" id="ceny" name="ceny_max" value="">
                    <br>
                    <button type="submit" name="add_service">Uložiť</button>
                </form>
            </div>
        </div>
    </section>
</main>
    
<?php
include_once('partials/footer.php');
?>
