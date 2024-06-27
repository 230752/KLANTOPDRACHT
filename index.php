<?php 
include ('database/db_connect.php');

if(isset($_POST['add-rev'])) {
    $datum = date('Y-m-d H:i:s');
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $bericht = $_POST['review'];
    $zichtbaar = 0;
    $sqli_prepare = $con->prepare("INSERT INTO recensies(datum, voornaam, achternaam, bericht, zichtbaar) VALUES(?, ?, ?, ?, ?);");
    $sqli_prepare->bind_param("ssssi", $datum, $voornaam, $achternaam, $bericht, $zichtbaar);
    $sqli_prepare->execute();
    $sqli_prepare->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hendrik Hovenier</title>
    <!-- favicon -->
    <link rel="icon" href="<?= BASEURL ?>assets/img/weblogo.ico">
    <!-- header CSS -->
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/header.css">
    <!-- main CSS -->
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/indexStyle.css">
    <!-- footer CSS -->
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/footer.css">
    <!-- menu JS -->
    <script src="<?= BASEURL ?>assets/js/header.js"></script>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- social media icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body>
    <div id="container">
        <?php include ('header.php'); ?>
        <main>
            <!-- intro && slideshow -->
            <?php include ('assets/php/slideshow.php'); ?>
            <div id="info-box-container">
                <div class="info-box">
                    <h2 class="info-box-title">Onderdeel</h2>
                    <img class="info-box-img" src="assets/img/ontwerp.png" alt="garden">
                    <p>
                        Ik maak de tuin onderdeel van jouw ‘thuis’, door hem volledig op jouw wensen af te stemmen.
                    </p>
                </div>
                <div class="info-box">
                    <h2 class="info-box-title">Producten</h2>
                    <img class="info-box-img" src="assets/img/products.png" alt="garden">
                    <p>
                        Met behulp van mooie, natuurlijke en duurzame producten en materialen creëer ik een tuin, die
                        garant
                        staat voor een jarenlang plezierig buitenleven.
                    </p>
                </div>
                <div class="info-box">
                    <h2 class="info-box-title">Mogelijkheden</h2>
                    <img class="info-box-img" src="assets/img/posibilities.png" alt="garden">
                    <p>
                        Van een knusse veranda en een mooie vijver, tot een gezellig terras en een kleurrijke
                        bloemenborder:
                        ik
                        stop al mijn energie erin.
                    </p>
                </div>
            </div>
            <!-- <div id="service-container">
                <div class="service-box">
                    <h2>Ontwerp</h2>
                    <img class="service-box-img" src="assets/img/placeholder.svg" alt="garden">
                </div>
                <div class="service-box">
                    <h2>Aanleg</h2>
                    <img class="service-box-img" src="assets/img/placeholder.svg" alt="garden">
                </div>
                <div class="service-box">
                    <h2>Onderhoud</h2>
                    <img class="service-box-img" src="assets/img/placeholder.svg" alt="garden">
                </div>
            </div> -->
            <div id="review-container">
                <h1>RECENSIES</h1>
                <div id="review-box-container">
                    <?php
                    $sqli_prepare = $con->prepare("SELECT voornaam, achternaam, bericht FROM recensies WHERE zichtbaar = 1 ORDER BY RAND() LIMIT 3;");
                    $sqli_prepare->bind_result($reviewFName, $reviewLName, $reviewMessage);
                    $sqli_prepare->execute();
                    while ($sqli_prepare->fetch()) { ?>
                        <div class="review-box">
                            <p class="review-name"><?php echo $reviewFName . ' ' . $reviewLName ?></p>
                            <p class="review-text"><?php echo $reviewMessage ?></p>
                        </div>
                    <?php } ?>
                </div>
                <div id="review-input-container">
                    <button id="review-btn" onclick="showReviewInput()">Schrijf een recensie</button>
                    <div id="review-overlay" style="display: none">
                        <button id="close-review-btn" onclick="showReviewInput()">&#10006;</button>
                        <form id="review-input" method="post">
                            <input class="input-name" type="text" name="voornaam" placeholder="voornaam" required>
                            <input class="input-name" type="text" name="achternaam" placeholder="achternaam" required>
                            <textarea name="review" id="desc-input" placeholder="recensie..." required></textarea>
                            <input id="submit-btn" name="add-rev" type="submit" value="Recensie verzenden">
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php include (BASE_PATH . "/footer.php"); ?>
    </div>
</body>

</html>