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
    <script src="<?= BASEURL ?>assets/js/header.js"></script>
</head>

<body>
    <div id="container">
        <?php include (BASE_PATH . "/header.php"); ?>
        <main>
            <div class="mepage">
                <H1>Over mij</H1>
                <div class="metext">
                    <div class="selfie">
                        <img src="/assets/img/Hendrik_foto.png" alt="Selfie Hendrik">
                    </div>
                </div>
                <div class="h-text">
                    <H3>Hovenier Hogendijk</H3>
                    <H4>Hier bij Hendrik Hovenier vind je de beste voor jouw tuin!</H4>
                </div>
                <div class="text-flexboxes">
                    <div class="intro-text">
                        <p id="mij-text">
                            Na mijn opleiding werkte ik jarenlang voor verschillende hoveniersbedrijven. <br>
                            Ik leerde veel over tuinontwerp, plantkunde en de beste technieken voor <br>
                            het onderhouden van verschillende soorten tuinen. <br>
                            <br>
                            Maar na verloop van tijd begon ik zich te realiseren dat ik mijn eigen ideeën <br>
                            en visie had over hoe een tuin eruit zou moeten zien en hoe klanten <br>
                            het beste bediend konden worden.
                        </p>
                    </div>
                    <div class="intro-text">
                        <p id="skills-text">
                            Gevorderd in:
                            <br>
                            <br>
                            aanleg & onderhoud,
                            <br>
                            plantenkennis,
                            <br>
                            arbo & veiligheid en bodemkunde.
                        </p>
                    </div>
                </div>
                <div class="diploma">
                    <img src="/assets/img/diploma Hendrik.png" alt="mijn diploma">
                </div>
            </div>
        </main>
        <?php include (BASE_PATH . "/footer.php"); ?>
    </div>
</body>

</html>