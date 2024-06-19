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
    <div id="container">
        <?php include (BASE_PATH . "/header.php"); ?>
        <main>
            <div class="selfie">
                <img src="/assets/img/Hendrik_foto.png" alt="Selfie Hendrik">
            </div>
        </main>
        <?php include (BASE_PATH . "/footer.php"); ?>
    </div>

</body>