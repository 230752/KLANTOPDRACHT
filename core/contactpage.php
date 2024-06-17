<?php
define()
include('<?=BASEURL?>../header.php')
?>

<body>
    <main>
        <h1>Contact Formulier</h1>
        <div class="contactform">
            <form action="reservatiepage.php" method="post">

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
    </main>
    <div class="footertxt">
        <h4>
            We streven ernaar om constant in contact te staan met onze klanten totdat de klus geklaard is. Als u
            vragen
            of speciale verzoeken heeft, stuur ons dan een bericht. Voor een vrijblijvende offerte kunt u contact
            met
            ons opnemen wanneer het u uitkomt. Wij zijn u graag van dienst!
        </h4>
    </div>
    <?php include ('../footer.php') ?>
</body>