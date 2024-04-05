<?php
    include_once('partials/header.php');
?>    
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