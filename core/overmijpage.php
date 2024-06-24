<?php
include ("../database/db_connect.php");
?>

<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over mij</title>
    <link rel="icon" href="<?= BASEURL ?>/assets/img/weblogo.ico">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/overmijStyle.css">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/footer.css">
</head>

<body>
    <?php include (BASE_PATH . "/header.php"); ?>
    <main>
        <div class="mepage">
            <H1>Over mij</H1>
            <div class="metext">
                <div class="selfie">
                    <img src="/assets/img/Hendrik_foto.png" alt="Selfie Hendrik">
                </div>
            </div>
            <div class="intro">
                <H3>Hovenier Hogendijk</H3>
                <H4>Hier bij Hendrik Hovenier vind je de beste voor jouw tuin!</H4>
                <div class="intro-text">
                    <p>
                        Na zijn opleiding werkte Johan jarenlang voor verschillende hoveniersbedrijven. Hij leerde veel
                        over tuinontwerp, plantkunde en de beste technieken voor het onderhouden van verschillende
                        soorten
                        tuinen. Maar na verloop van tijd begon hij zich te realiseren dat hij zijn eigen ideeën en visie
                        had over hoe een tuin eruit zou moeten zien en hoe klanten het beste bediend konden worden.
                    </p>
                    <p>
                        Op een zonnige lenteochtend, terwijl Johan bezig was met het aanleggen van een prachtige
                        bloementuin, kreeg hij een ingeving. Waarom zou hij zijn dromen en ideeën niet omzetten in een
                        eigen bedrijf?
                        Hij wilde een bedrijf starten waar hij zijn creativiteit de vrije loop kon laten, waar hij
                        zijn passie voor tuinen kon delen met anderen en waar hij klanten kon helpen om hun tuindromen
                        te verwezenlijken.
                    </p>
                </div>
            </div>
        </div>
    </main>
    <?php include (BASE_PATH . "/footer.php"); ?>
</body>

</html>