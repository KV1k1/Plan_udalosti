<?php
include_once('partials/header.php');
$service = new Service();
$services = $service->getAllServices();
$table = new Table();
$events = $table->getAllEvents();
?>

<body class="bgindex sluzby">

    <main>
        <!--text1-->
        <div class="container">
            <div class="row">
                <h1 class="text-uppercase font-weight-bold my-5" style="color: rgb(42, 99, 81);">Naše služby</h1>
            </div>
            <div class="row">
                <p>Naša eventová agentúra ponúka komplexné riešenia pre organizáciu rozmanitých firemných podujatí. Zameriavame sa na poskytnutie hostom nezabudnuteľných zážitkov.</p>
                <p>Sme tu, aby sme zabezpečili výber vhodného miesta, ubytovanie, stravu, konferenčné priestory, program, dopravu, moderátora, hudbu, kompletné technické a personálne vybavenie, vizuálny záznam a ďalšie služby podľa vašich individuálnych požiadaviek. Ak hľadáte spoľahlivého partnera pre nezabudnuteľné firemné podujatia, agentúra MooN Events je tu pre vás.</p>
            </div>
            <div class="row">
                <div class="col">
                    <!--button-->
                    <button class="btn btn-primary"><a class="lnk" href="#cennik">Cenník</a></button>
                </div>
            </div>
        </div>

        <br><br><br>

        <?php foreach ($services as $key => $service): ?>
            <section style="background-color: <?= ($key % 2 == 0) ? '#a89897' : '#f5e3e2' ?>;">
                <br><br><br>
                <div class="container">
                    <div class="mb-3 text-dark">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <?php if (isset($service['image'])): ?>
                                    <img src="<?= $service['image'] ?>" class="img-fluid rounded" alt="<?= isset($service['alt_text']) ? $service['alt_text'] : '' ?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-8">
                                <div class="p-5">
                                    <h2 class="nadpis1 text-uppercase"><?= $service['title'] ?></h2>
                                    <p><?= $service['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>
            </section>
        <?php endforeach; ?>

        <!--cenník - tabuľka-->
        <section id="cennik">
            <h1 class="nadpis1 text-center text-uppercase my-5">Cenník</h1>
            <div class="container my-5">
                <div class="row text-center">
                    <div class="col-md-12 col-xs-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Typ udalosti</th>
                                        <th>Počet účastníkov</th>
                                        <th>Trvanie</th>
                                        <th>Rozsah ceny (Nízka-Vysoká)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($events as $event): ?>
                                        <tr>
                                            <td><?= $event['event_type'] ?></td>
                                            <td><?= $event['participants_min'] ?> - <?= $event['participants_max'] ?></td>
                                            <td><?= $event['duration'] ?></td>
                                            <td><?= $event['price_min'] ?>€ - <?= $event['price_max'] ?>€</td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php
    include_once('partials/footer.php');
    ?>
</body>
