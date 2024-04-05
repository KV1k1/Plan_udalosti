<?php
    include_once('partials/header.php');
?> 
<body class="bgindex">

        <!--navigácia - 4 podstránky-->

    <main>

        <!--slideshow - banner s textom-->
        <div class="slideshow">
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
        </div>

          

          <!--text-->
          <div class="container-fluid padding bg-white rounded bg-opacity-50 p-5">
          <div class="row welcome text-center">
            <div class="col-12">
                <p style= "font-weight: bold;" class="p-2">Sídlime na Slovensku, ale cestujeme po celom svete</p>
            </div>
            <div class="col-12">
                <h1 class="display-2 p-2" style="color: rgb(42, 99, 81); text-decoration: underline;">Svadby & Plánovanovanie udalostí</h1>
            </div>
            <div class="col-12">
                <p class="lead">Od svadieb šitých na mieru po náročné firemné podujatia, ktoré posilňujú firemné vzťahy, Moon Events má talent pre premenu špeciálnych miest v nezabudnuteľné zážitky.</p>
                <p>Sme váš spoľahlivý partner v organizovaní nezabudnuteľných udalostí, či už ide o svadby, firemné podujatia alebo oslavy. S naším záväzkom k detailom a kreativitou vytvoríme pre vás udalosť presne podľa vašich predstáv.</p>            </p>
                <p>S nami sa vaše sny stávajú skutočnosťou!</p>
            </div>
          </div>
          </div>

          <br><br><br><br>

          <!--akordeón-->
          <section>
            <h2 class="text-center nadpis1 p-2 m-5">5 P-iek plánovania udalostí</h2>
            <div class="accordion text-dark container" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Plan
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Jasný plán poskytuje smer, no je dôležité, aby ho niekto riadne dodržiaval. Značky by mali vybrať kľúčových zamestnancov do tímu pre udalosti, ktorí budú spolupracovať s manažérmi udalostí. Ich úlohou je schvaľovať nápady, robiť rozpočtové rozhodnutia a doplniť reálnymi termínmi plán udalostí. Tím tiež zabezpečuje všetko od miesta konania cez zabezpečenie licencií až po informovanie hostí. Dôležité je, že plánujúci musia premýšľať ako hostia a zabezpečiť jednoduchosť každého detailu, aby nezmätlivili alebo neznechutili svoje publikum.</p>    
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Partner
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Žiadne podujatie neobstojí samo o sebe a značky by mali kontaktovať rôznych partnerov a dodávateľov, aby to začalo fungovať. Od hlavných oblastí ako catering, osvetlenie, zábava a bezpečnosť až po tlačiarenskej, poistenie a parkovanie, existuje množstvo partnerov potrebných na úspech podujatia. Profesionáli v správe udalostí majú prehľad o správnych ľuďoch aj o riadení vzťahov. S ich pomocou odpadá starosť s jednotlivými dodávateľmi a zabezpečujú najlepšie obchodné podmienky od overených partnerov.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Place
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">    
                        <div class="accordion-body">
                            <p>Výber miesta pre udalosť nie je len o fotkách a plánoch. Treba ho navštíviť. Značky by mali preskúmať miesto v čase udalosti a skontrolovať zariadenia a okolie. Je tam dosť toaletov, prístup pre vozíčkárov? A nehrozí, že blízka rybacia továreň pridá nepríjemnú vôňu do mixu udalosti?</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Practice
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Veriť, že všetko zvládnete bez skúšky, je riskantné. Aj kapely sa pripravujú pred vystúpením. Predsa len, udalosť potrebuje plánované testy. Skontrolovať, či všetko funguje na mieste, je dôležité - od toaletov cez akustiku až po logistiku cateringového tímu. Organizátori musia premyslieť možné scenáre, plánovať skúšky a stretnutia s partnermi a vyskúšať miesto udalosti predtým, než sa začne, aby sa predišlo možným chybám. A čo evakuácia pri požiari? Skúšali ste ju so zohľadnením sociálnej vzdialenosti?</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Permission
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">

            <!--tlačidlo s preklikom na inú stránku-->

                        <div class="accordion-body">
                            <p>Pred začatím udalosti je potrebné urobiť posledné dôležité kontroly. Zmeny v pláne sa často vyskytujú - nové kapely, rôzni catereri, ďalších 100 pozvaných. To ovplyvňuje rozpočet, takže je kľúčové získať konečné schválenie pred udalosťou, aby ste sa vyhli nepríjemným diskusiám neskôr.</p>
                            <a href="https://rebelandsoul.com/five-ps-of-event-planning/" target="_blank" style="text-decoration: none;">Čítajte viac</a>
                        </div>
                    </div>
                </div>
            </div>
          </section>

          <br><br><br><br>

          <!--card-->
          <section>
            <div class="container">
                <div>
                    <h2 class="m-5 nadpis1">Spolupracujeme s:</h2>
                </div>
                <div class="card mb-3 bg-white text-dark bg-opacity-50">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/p14.jpeg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">David Tutera</h3>
                                <p class="card-text">Je americkým plánovačom slávnych svadieb, návrhárom svadobnej módy, autorom a profesionálnym rečníkom. Je moderátorom šou na WE TV s názvom Moja dokonalá svadba s Davidom Tuterom a CELEBrations s Davidom Tuterom.</p>
                                
                                <!--tlačidlo s preklikom na inú stránku-->

                                <button class="btn btn-primary"><a class="lnk" href="https://en.wikipedia.org/wiki/David_Tutera" target="_blank">Čítajte viac</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card mb-3 bg-white text-dark bg-opacity-50">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/p15.jpeg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">Marcy Blum</h3>
                                <p class="card-text">Absolvovala The Culinary Institute of America a začala svoju kariéru v reštauračnom biznise, neskôr prechádzajúc do vtedy rozvíjajúceho sa oboru plánovania udalostí. V roku 1986 sa stala jednou z prvých vo svojom odvetví, ktorá premenila túto profesiú na úspešnú kariéru.</p>
                                
                                <!--tlačidlo s preklikom na inú stránku-->

                                <button class="btn btn-primary"><a class="lnk" href="https://en.wikipedia.org/wiki/Marcy_Blum" target="_blank">Čítajte viac</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </section>
          <br><br><br>
    </main>

    


    <!--info, copyright-->
<?php
    include_once('partials/footer.php');
?> 