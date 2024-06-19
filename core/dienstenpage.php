<?php
include ("../database/db_connect.php");
?>

<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diensten</title>
    <link rel="icon" href="<?= BASEURL ?>/assets/img/weblogo.ico">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/dienstenStyle.css">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/footer.css">
</head>

<body>

    <div id="container">
        <?php include (BASE_PATH . "/header.php"); ?>
        <main>
            <div class="diensten">
                <div class="dienst">
                <img src="/assets/img/icon-tuinontwerp.png" alt="Foto ontwerp">
                    <h4>Tuin ontwerp</H4>
                    <p>Een mooie tuin valt of staat bij een goed tuinontwerp.
                        Als het op ontwerpen aankomt, maakt Hendrik Hogendijk het verschil.
                    </p>
                </div>
                <div class="dienst">
                <img src="/assets/img/icon-tuinaanleg.png" alt="Foto aanleg">
                    <h4>Tuin aanleg</h4>
                    <p>
                        Het aanleggen van een tuin doen ik altijd vanuit dezelfde drive: ik wil er iets moois van maken.
                    </p>
                </div>
                <div class="dienst">
                    <img src="/assets/img/icon-tuinonderhoud.png" alt="Foto-onderhoud">
                    <H4>Tuin onderhoud</H4>
                    <p>
                        Een mooie tuin verdient het juiste onderhoud.
                        Immers, goed onderhoud is een essentiële voorwaarde voor een tuin die het hele jaar door mooi
                        blijft.
                    </p>
                </div>
                <div class="dienst">
                    <img src="/assets/img/icon-zwemvijvers.png" alt="Foto-vijvers">
                    <H4>Zwem vijvers</H4>
                    <p>
                        Zwemvijvers, is één van mjn grootste passies.
                        En gelukkig, ze winnen aan steeds meer populariteit, waardoor ik er veel ervaring mee heb
                        opgebouwd.
                    </p>
                </div>
            </div>
        </main>
        <?php include (BASE_PATH . "/footer.php"); ?>
    </div>
</body>

</html>