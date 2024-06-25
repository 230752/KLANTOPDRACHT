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
            <div class="intro" id="intro-id">
                <H1>Over mij</H1>
                <div class="metext">
                    <div class="selfie">
                        <img src="/assets/img/Hendrik_foto.png" alt="Selfie Hendrik">
                    </div>
                </div>
                <H3>Hovenier Hogendijk</H3>
                <H4>Hier bij Hendrik Hovenier vind je de beste voor jouw tuin!</H4>
                <div class="intro-text" id="text-id">
                    <p>
                        Na mijn opleiding werkte ik jarenlang voor verschillende hoveniersbedrijven. Ik leerde veel
                        over tuinontwerp, plantkunde en de beste technieken voor het onderhouden van verschillende
                        soorten
                        tuinen. Maar na verloop van tijd begon ik zich te realiseren dat ik mijn eigen ideeën en visie
                        had over hoe een tuin eruit zou moeten zien en hoe klanten het beste bediend konden worden.
                    </p>
                    <p>
                        Gevorderd in:
                        <br>
                        aanleg & onderhoud, plantenkennis, arbo & veiligheid en bodemkunde.
                    </p>
                </div>
            </div>
        </div>
    </main>
    <?php include (BASE_PATH . "/footer.php"); ?>
</body>

</html>