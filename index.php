<?php
    include_once('partials/header.php');
?> 
<body class="bgindex">

        <!--navigácia - 4 podstránky-->

    <main>

        <!--slideshow - banner s textom-->
        <?php
        echo generate_slideshow();
        echo generate_text_section();
        ?>

          <br><br><br><br>

          <!--akordeón-->
        <?php
            $accordionItems = array(
                array("heading" => "headingOne",
                "collapseId" => "collapseOne",
                "title" => "Plan",
                "content" => "Jasný plán poskytuje smer, no je dôležité, aby ho niekto riadne dodržiaval. Značky by mali vybrať kľúčových zamestnancov do tímu pre udalosti, ktorí budú spolupracovať s manažérmi udalostí. Ich úlohou je schvaľovať nápady, robiť rozpočtové rozhodnutia a doplniť reálnymi termínmi plán udalostí. Tím tiež zabezpečuje všetko od miesta konania cez zabezpečenie licencií až po informovanie hostí. Dôležité je, že plánujúci musia premýšľať ako hostia a zabezpečiť jednoduchosť každého detailu, aby nezmätlivili alebo neznechutili svoje publikum."
                ),
                array(
                    "heading" => "headingTwo",
                    "collapseId" => "collapseTwo",
                    "title" => "Partner",
                    "content" => "Žiadne podujatie neobstojí samo o sebe a značky by mali kontaktovať rôznych partnerov a dodávateľov, aby to začalo fungovať. Od hlavných oblastí ako catering, osvetlenie, zábava a bezpečnosť až po tlačiarenskej, poistenie a parkovanie, existuje množstvo partnerov potrebných na úspech podujatia. Profesionáli v správe udalostí majú prehľad o správnych ľuďoch aj o riadení vzťahov. S ich pomocou odpadá starosť s jednotlivými dodávateľmi a zabezpečujú najlepšie obchodné podmienky od overených partnerov."
                ),
                array(
                    "heading" => "headingThree",
                    "collapseId" => "collapseThree",
                    "title" => "Place",
                    "content" => "Výber miesta pre udalosť nie je len o fotkách a plánoch. Treba ho navštíviť. Značky by mali preskúmať miesto v čase udalosti a skontrolovať zariadenia a okolie. Je tam dosť toaletov, prístup pre vozíčkárov? A nehrozí, že blízka rybacia továreň pridá nepríjemnú vôňu do mixu udalosti?"
                ),
                array(
                    "heading" => "headingFour",
                    "collapseId" => "collapseFour",
                    "title" => "Practice",
                    "content" => "Veriť, že všetko zvládnete bez skúšky, je riskantné. Aj kapely sa pripravujú pred vystúpením. Predsa len, udalosť potrebuje plánované testy. Skontrolovať, či všetko funguje na mieste, je dôležité - od toaletov cez akustiku až po logistiku cateringového tímu. Organizátori musia premyslieť možné scenáre, plánovať skúšky a stretnutia s partnermi a vyskúšať miesto udalosti predtým, než sa začne, aby sa predišlo možným chybám. A čo evakuácia pri požiari? Skúšali ste ju so zohľadnením sociálnej vzdialenosti?"
                ),
                array(
                    "heading" => "headingFive",
                    "collapseId" => "collapseFive",
                    "title" => "Permission",
                    "content" => "Pred začatím udalosti je potrebné urobiť posledné dôležité kontroly. Zmeny v pláne sa často vyskytujú - nové kapely, rôzni catereri, ďalších 100 pozvaných. To ovplyvňuje rozpočet, takže je kľúčové získať konečné schválenie pred udalosťou, aby ste sa vyhli nepríjemným diskusiám neskôr."
                )
            );
            generateAccordion($accordionItems);

        ?>

          

          <br><br><br><br>

          <!--card-->
        <?php
            $collaborators = array(
                array(
                    "imgSrc" => "img/p14.jpeg",
                    "name" => "David Tutera",
                    "description" => "Je americkým plánovačom slávnych svadieb, návrhárom svadobnej módy, autorom a profesionálnym rečníkom. Je moderátorom šou na WE TV s názvom Moja dokonalá svadba s Davidom Tuterom a CELEBrations s Davidom Tuterom.",
                    "link" => "https://en.wikipedia.org/wiki/David_Tutera"
                ),
                array(
                    "imgSrc" => "img/p15.jpeg",
                    "name" => "Marcy Blum",
                    "description" => "Absolvovala The Culinary Institute of America a začala svoju kariéru v reštauračnom biznise, neskôr prechádzajúc do vtedy rozvíjajúceho sa oboru plánovania udalostí. V roku 1986 sa stala jednou z prvých vo svojom odvetví, ktorá premenila túto profesiú na úspešnú kariéru.",
                    "link" => "https://en.wikipedia.org/wiki/Marcy_Blum"
                )
            );
            generateCollaboratorsSection($collaborators);

        ?>
          <br><br><br>
    </main>

    


    <!--info, copyright-->
<?php
    include_once('partials/footer.php');
?> 