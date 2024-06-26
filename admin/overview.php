<?php
include ('../database/db_connect.php');
if ($_SESSION['login'] == false) {
    header('location: index.php');
    exit;
}

if (isset($_POST['log-out'])) {
    $_SESSION['login'] = false;
    header('location: index.php');
    exit;
}

if (isset($_POST['delete-contact'])) {
    $id = $_POST['delete-contact'];
    $sqli_prepare = $con->prepare("DELETE FROM opdrachten WHERE id = ?");
    $sqli_prepare->bind_param("i", $id);
    $sqli_prepare->execute();
    $sqli_prepare->close();
}

if (isset($_POST['delete-review'])) {
    $id = $_POST['delete-review'];
    $sqli_prepare = $con->prepare("DELETE FROM recensies WHERE id = ?");
    $sqli_prepare->bind_param("i", $id);
    $sqli_prepare->execute();
    $sqli_prepare->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/overview.css">
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body>
    <?php include ('assets/php/header.php'); ?>
    <main>
        <?php if (isset($_POST['contact'])) { ?>
            <h1>Contact Formuliers:</h1>
            <p>Druk op de box voor meer informatie of om het te bewerken</p>
            <?php
            $sqli_prepare = $con->prepare("SELECT * FROM opdrachten");
            $sqli_prepare->bind_result($id, $datum, $voornaam, $achternaam, $adres, $telefoonnummer, $email, $opmerking);
            $sqli_prepare->execute(); ?>
            <div id="container">
                <?php while ($sqli_prepare->fetch()) { ?>
                    <a href="full-view-contact.php?id=<?php echo $id ?>">
                        <div class="box">
                            <h2>id: <?php echo $id ?></h2>
                            <p class="label">Datum: <?php echo $datum ?></p>
                            <p class="label">Naam: <?php echo $voornaam . " " . $achternaam ?></p>
                            <p class="label">Postcode: <?php echo $adres ?></p>
                            <p class="label">Telefoonnummer: <?php echo $telefoonnummer ?></p>
                            <p class="label">E-mail: <?php echo $email ?></p>
                            <p class="label">Beschrijving: ...</p>
                            <form method="post">
                                <button id="delete-btn" name="delete-contact" value="<?php echo $id ?>">Verwijder</button>
                            </form>
                        </div>
                    </a>
                <?php }
                echo "</div>";
                $sqli_prepare->close();
        } else if (isset($_POST['recensies'])) { ?>
                    <h1>Recensies:</h1>
                    <p>Druk op de box voor meer informatie of om het te bewerken</p>
                    <p>zichtbaarheid op de website <br> 1 = zichtbaar <br> 0 = onzichtbaar</p>
                    <?php
                    $sqli_prepare = $con->prepare("SELECT * FROM recensies");
                    $sqli_prepare->bind_result($id, $datum, $voornaam, $achternaam, $bericht, $zichtbaar);
                    $sqli_prepare->execute(); ?>
                    <div id="container">
                    <?php while ($sqli_prepare->fetch()) { ?>
                            <a href="full-view-review.php?id=<?php echo $id ?>">
                                <div class="box">
                                    <h2>id: <?php echo $id ?></h2>
                                    <p class="label">Datum: <?php echo $datum ?></p>
                                    <p class="label">Naam: <?php echo $voornaam . ' ' . $achternaam ?></p>
                                    <p class="label">Zichtbaar: <?php echo $zichtbaar ?></p>
                                    <p class="label">Recensie: ...</p>
                                    <form method="post">
                                        <button id="delete-btn" name="delete-review" value="<?php echo $id ?>">Verwijder</button>
                                    </form>
                                </div>
                            </a>
                    <?php }
        } else { ?>
                        <div id="home">
                            <h1>Welkom</h1>
                        <?php if (isset($_POST['delete-order']) || isset($_POST['delete-review'])) {
                            echo "<p style='color: red;'>VERWIJDERED</p>";
                        } ?>
                            <p>Kies hier onder wat u wilt zien</p>
                            <form id="link-btn-container" method="post">
                                <button class="link-btn" name="contact">Contact</button>
                                <button class="link-btn" name="recensies">Recensies</button>
                            </form>
                        </div>
                <?php } ?>
    </main>
    <footer>

    </footer>
</body>

</html>