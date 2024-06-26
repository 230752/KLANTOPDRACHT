<header>
    <div id="logo-container">
        <a href="/index.php">
            <img id="header-logo" src="<?=BASEURL?>assets/img/weblogo2.png" alt="weblogo">
        </a>
    </div>
    <div id="header-buttons-container">
        <a class="header-button" href="/index.php">Home</a>
        <a class="header-button" href="/core/dienstenpage.php">Diensten</a>
        <a class="header-button" href="/core/overmijpage.php">Over mij</a>
        <a id="contact-btn" href="/core/contactpage.php">CONTACT</a>
        <div id="menu-container">
            <button id="drop-btn" onclick="showMenu()"><img id="menu-icon" src="<?=BASEURL?>assets/img/menu-icon.png"
                    alt="menubutton"></button>
            <div id="menu-overlay" style="display: none;">
                <div id="menu-links">
                    <a class="menu-link" href="/core/dienstenpage.php">Diensten</a>
                    <a class="menu-link" href="/core/overmijpage.php">Over mij</a>
                    <a class="menu-link" href="/core/contactpage.php">CONTACT</a>
                </div>
            </div>
        </div>
    </div>
</header>