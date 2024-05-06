
<?php
require('config.php');

function add_stylesheets() {
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">';
    echo '<link rel="stylesheet" href="css/style.css">';
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
    switch($page_name){
        case 'recenzie':
            echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">';
            break;
        }
}

function add_scripts(){
    echo('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>');
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
    switch($page_name){
        case 'recenzie':
            echo('<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>');
            echo('<script src="js/baguette.js"></script>');
            break;
    }
}









function generate_menu(): string{
    $menuItems = ''; // Inicializácia premennej pre uloženie HTML kódu navigačného menu
    
    // Prechádza všetky položky v zadanom zozname stránok a URL adries
    foreach($this->pages as $page_name => $page_url){
        // Pre každú stránku pridá odkaz do navigačného menu
        $menuItems .= '<li class="nav-item"><a class="nav-link ' . (($page_name == 'Domov') ? 'font-weight-bold' : '') . '" href="' . $page_url . '">' . $page_name . '</a></li>';
    }

    // Vráti vygenerovaný HTML kód pre navigačné menu
    return $menuItems;
}

function generate_slideshow(): string {
    $slideshow = '<div class="slideshow">
                    <div class="maintitle bg-dark rounded bg-opacity-50 text-center">Vy len kludne snívajte, my to premeníme na skutočnosť</div>
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="3000">
                                <img src="img/p2.jpeg" class="d-block w-100" height="650px" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="img/p1.jpeg" class="d-block w-100" height="650px" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="img/p3.jpeg" class="d-block w-100" height="650px" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="img/p5.jpeg" class="d-block w-100" height="650px" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>        
                </div>';

    return $slideshow;
}

function generate_text_section(): string {
    $textSection = '<div class="container-fluid padding bg-white rounded bg-opacity-50 p-5">
                        <div class="row welcome text-center">
                            <div class="col-12">
                                <p style= "font-weight: bold;" class="p-2">Sídlime na Slovensku, ale cestujeme po celom svete</p>
                            </div>
                            <div class="col-12">
                                <h1 class="display-2 p-2" style="color: rgb(42, 99, 81); text-decoration: underline;">Svadby & Plánovanovanie udalostí</h1>
                            </div>
                            <div class="col-12">
                                <p class="lead">Od svadieb šitých na mieru po náročné firemné podujatia, ktoré posilňujú firemné vzťahy, Moon Events má talent pre premenu špeciálnych miest v nezabudnuteľné zážitky.</p>
                                <p>Sme váš spoľahlivý partner v organizovaní nezabudnuteľných udalostí, či už ide o svadby, firemné podujatia alebo oslavy. S naším záväzkom k detailom a kreativitou vytvoríme pre vás udalosť presne podľa vašich predstáv.</p>
                                <p>S nami sa vaše sny stávajú skutočnosťou!</p>
                            </div>
                        </div>
                    </div>';

    return $textSection;
}

function redirect_homepage(){
    header("Location: templates/index.php");
    die("Nepodarilo sa nájsť Domovskú stránku");
}

?>