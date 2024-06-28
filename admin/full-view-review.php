<?php
include ("../database/db_connect.php");

if ($_SESSION['login'] == false) {
    header("location: index.php");
    exit;
}

if (isset($_POST['log-out'])) {
    $_SESSION['login'] = false;
    header("location: index.php");
    exit;
}

if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $sqli_prepare = $con->prepare("DELETE FROM recensies WHERE id = ?");
    $sqli_prepare->bind_param("i", $id);
    $sqli_prepare->execute();
    $sqli_prepare->close();
    header('location: overview.php');
}

if (isset($_POST['edit'])) {
    $datum = $_POST['datum'];
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $bericht = $_POST['description'];
    $zichtbaar = $_POST['zichtbaar'];
    $sqli_prepare = $con->prepare("UPDATE recensies SET datum = ?, voornaam = ?, achternaam = ?, bericht = ?, zichtbaar = ? WHERE id = $_GET[id];");
    $sqli_prepare->bind_param("ssssi", $datum, $voornaam, $achternaam, $bericht, $zichtbaar);
    $sqli_prepare->execute();
    $sqli_prepare->close();
    // header('location: full-view-contact.php');
    // exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/full-view.css">
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body>
    <div id="container">
        <header>
            <a id="return-btn" href="overview.php">Ga terug</a>
            <form method="post">
                <button id="log-out-btn" name="log-out">Log uit</button>
            </form>
        </header>
        <main>
            <h1>Recensie:</h1>
            <?php
            $sqli_prepare = $con->prepare("SELECT * FROM recensies WHERE id = $_GET[id];");
            $sqli_prepare->bind_result($id, $datum, $voornaam, $achternaam, $bericht, $zichtbaar);
            $sqli_prepare->execute(); ?>
            <?php while ($sqli_prepare->fetch()) { ?>
                <form id="info" method="POST">
                    <h2>ID: <?php echo $id ?></h2>
                    <label for="voornaam">Voornaam:</label>
                    <input id="voornaam" class="input" type="text" name="voornaam" value="<?php echo $voornaam ?>">
                    <label for="achternaam">Achternaam:</label>
                    <input id="achternaam" class="input" type="text" name="achternaam" value="<?php echo $achternaam ?>">
                    <label for="datum">Datum:</label>
                    <input id="datum" class="input" type="text" name="datum" value="<?php echo $datum ?>">
                    <label for="zichtbaar">Zichtbaar:</label>
                    <input id="zichtbaar" class="input" type="text" name="zichtbaar" value="<?php echo $zichtbaar ?>">
                    <textarea id="desc-input" name="description"><?php echo $bericht ?></textarea>
                    <button id="edit-btn" type="submit" name="edit">Bewerk</button>
                </form>
                <form id="delete-center" method="post">
                    <button id="delete-btn" value="<?php echo $id ?>" type="submit" name="delete">Vewijder</button>
                </form>
            <?php }
            $sqli_prepare->close(); ?>
        </main>
    </div>
</body>

</html>