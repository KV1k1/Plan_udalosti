<?php
    include_once('partials/header.php');
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--meta značky-->
    <meta name="description" content="Kontaktujte nás a získajte viac informácií o našich službách profesionálnych organizátorov udalostí. Môžeme vám pomôcť s plánovaním svadieb, firemných podujatí a ďalších špeciálnych udalostí.">
    <meta name="keywords" content="kontakt, kontaktujte nás, informácie, plánovanie udalostí, svadby, firemné podujatia, event management, špeciálne udalosti">
    <meta name="author" content="Viktória Kovácsová">

    <title>Kontakt</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bgindex">
    <main>
        <!--formulár-->
        <section class="getintouch rounded" style="background-color: white;">
            <h1 class="title">Kontaktujte nás</h1>

            <div class="container">
                <form id="contact">
                    <div class="contact-form row">
                        <div class="form-field col-lg-6">
                            <input id="meno" class="input-text" type="text">
                            <label for="meno" class="label">Meno</label>
                        </div>
                        <div class="form-field col-lg-6">
                            <input id="priezvisko" class="input-text" type="text">
                            <label for="priezvisko" class="label">Priezvisko</label>
                        </div>
                        <div class="form-field col-lg-6">
                            <input id="email" class="input-text" type="email">
                            <label for="email" class="label">Email</label>
                        </div>
                        <div class="form-field col-lg-6">
                            <input id="event" class="input-text" type="text">
                            <label for="event" class="label">Typ udalosti</label>
                        </div>
                        <div class="form-field col-lg-12">
                            <textarea id="text" cols="30" rows="10" class="input-text"></textarea>
                            <label for="email" class="label">Vaša správa</label>
                        </div>
                        <div class="form-field col-lg-12 p-2">
                            <input type="text" id="taskInput" placeholder="Kľúčové slová (optional)" class="input-text"><br>
                            <button onclick="addTask()" class="btn btn-primary">Pridať</button>
                            <ul id="taskList"></ul>
                            
                        </div>
                        <div class="form-field col-lg-12">
                            <input type="checkbox" name="" id=""  ><label for="checkbox" class="p-2"> Súhlas so spracovaním osobných údajov.</label> <br><br><br>
                            <input type="submit" id="submit" type="submit" value="Submit" class="submit-btn rounded">
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>




        <!--info, copyright-->
<?php
    include_once('partials/footer.php');
?>    
</body>
</html>