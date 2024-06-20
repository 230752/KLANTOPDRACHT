<?php
include ("../database/db_connect.php");
?>

<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" href="<?= BASEURL ?>/assets/img/weblogo.ico">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/contactStyle.css">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/footer.css">
</head>

<body>
    <?php include (BASE_PATH . "/header.php"); ?>

    <main>
        <div class="fpage">
            <div>
                <H1>Contact Formulier</H1>
                <div class="contactform">
                    <form action="overmijpage.php" method="post">

                        <label for="vnaam">Voornaam</label>
                        <input type="text" id="vnaam" name="vnaam" placeholder="Uw voornaam.." required>

                        <label for="anaam">Achternaam</label>
                        <input type="text" id="anaam" name="anaam" placeholder="Uw achternaam.." required>

                        <label for="adres">Adres</label>
                        <input type="text" id="adres" name="adres" placeholder="Uw adres.." required>

                        <label for="telnummer">Telefoon nummer</label>
                        <input type="text" id="telnummer" name="telnum" placeholder="Uw telefoon nummer.." required>

                        <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" placeholder="Uw e-mail.." required>

                        <label for="subject">Vraag/Opmerking</label>
                        <textarea id="subject" name="opmrk" placeholder="Schrijf hier.." rows="4" cols="50"></textarea>

                        <input type="submit" value="Maak afspraak" name="add">
                    </form>
                </div>
            </div>
            <div class="right-info">
                <div class="info">
                    <iframe id="google-maps"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4899.554601795917!2d5.266849776508817!3d52.120180671959154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c642613b5a8d0b%3A0x25dde48235d95baf!2sBeukbergenhof%2093%2C%203712%20BX%20Huis%20Ter%20Heide!5e0!3m2!1snl!2snl!4v1718619485389!5m2!1snl!2snl"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <H3>
                        Openingstijden
                    </H3>
                    <H4>
                        Maandag - Vrijdag: 07.00 - 17.00 uur
                        <br>
                        Zaterdag: Op afspraak
                        <br>
                        Zondag: Gesloten
                    </H4>
                    <H5>
                        We streven ernaar om constant in contact te staan met onze klanten totdat de klus geklaard
                        is.
                        Als u
                        vragen
                        of speciale verzoeken heeft, stuur ons dan een bericht. Voor een vrijblijvende offerte kunt
                        u
                        contact
                        met
                        ons opnemen wanneer het u uitkomt. Wij zijn u graag van dienst!
                    </H5>
                </div>
            </div>
        </div>
    </main>
    <?php include (BASE_PATH . "/footer.php"); ?>
</body>

</html>