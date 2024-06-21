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
                <H2>Hovenier Hogendijk</H2>
                <H3>Hier bij Hendrik Hovenier vind je de beste voor jouw tuin!</H3>
                <p> 
                    Ik ben Hendrik Hogendijk
                    <br>
                    We zijn bereikbaar in regio's Zeist en De Bilt
                </p>
            </div>
        </div>
    </main>
    <?php include (BASE_PATH . "/footer.php"); ?>
</body>

</html>