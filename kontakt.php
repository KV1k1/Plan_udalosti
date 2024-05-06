<?php
include_once('partials/header.php');


?>

<body class="bgindex">
    <main>
        <!--formulár-->
        <section class="getintouch rounded" style="background-color: white;">
            <h1 class="title">Kontaktujte nás</h1>

            <div class="container">
                <form id="contact" action="ty.php" method="POST">
                    <div class="contact-form row">
                        <div class="form-field col-lg-12">
                            <input name="contact_name" id="meno" class="input-text" type="text" required>
                            <label for="meno" class="label">Meno</label>
                        </div>
  
                        <div class="form-field col-lg-12">
                            <input name="contact_email" id="email" class="input-text" type="email" required>
                            <label for="email" class="label">Email</label>
                        </div>

                        <div class="form-field col-lg-12">
                            <textarea name="contact_message" id="text" cols="30" rows="10" class="input-text" required></textarea>
                            <label for="email" class="label">Vaša správa</label>
                        </div>

                        <div class="form-field col-lg-12">
                            <input type="checkbox" name="contact_acceptance" id="acceptance"  value="1" required><label for="acceptance" class="p-2"> Súhlas so spracovaním osobných údajov.</label> <br><br><br>
                            <input type="submit" name="contact_submitted" id="submit" type="submit" value="Submit" class="submit-btn rounded">
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <?php
    include_once('partials/footer.php');
    ?>

</body>
</html>
