<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hundjouren</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="getID.js"></script>
    <script src="js.js"></script>
</head>

<body onload="loaded()">
    <div class="navbar">
        <a id="home" class="active" href="home.php">Hem</a>
        <div class="dropdown">
            <button id="thedogs" class="dropbtn" onclick="myFunction()">
                Våra hundar
            </button>
            <div class="dropdown-content" id="myDropdown">
                <a id="isor" href="isor.php">Isor</a>
                <a id="pandora" href="pandora.php">Pandora</a>
                <a id="allie" href="allie.php">Allie</a>
                <a id="titus" href="titus.php">Titus</a>
                <a id="atlaz" href="atlaz.php">Altaz</a>
                <a id="mina" href="mina.php">Mina</a>
                <a id="pepper" href="pepper.php">Pepper</a>
                <a id="zelda" href="zelda.php">Zelda</a>
                <a id="stella" href="stella.php">Stella</a>
                <a id="leia" href="leia.php">Leia</a>
                <a id="viggo" href="viggo.php">Viggo</a>
                <a id="enzo" href="enzo.php">Enzo</a>
            </div>
        </div>
        <a id="terms" href="terms.php">Adoptionsvillkor</a>
        <div class="dropdown">
            <button id="support" class="dropbtn" onclick="support()">
                Stöd oss
            </button>
            <div class="dropdown-content" id="myDropdown2">
                <a id="membership" href="membership.php">Medlemskap</a>
                <a id="donations" href="donations.php">Donationer</a>
            </div>
        </div>
        <a id="aboutus" href="about.php">Om oss</a>
        <a id="contactus" href="contact.php">Kontakt</a>
    </div>

    <div class="paper">
        <div class="rubrik-bakgrund">
            <h1 class="rubrik">Välkommen till adoptionsbyrån Hundjouren!</h1>
        </div>

        <img id="dogs" src="dogs.jpg" alt="Dogs">

        <p class="intro">
            Att adoptera ett djur förändrar inte hela världen. Men det kan förändra någons hela värld.<br><br>

            Hundjouren är en ideell förening som räddar och omplacerar avlivningshotade hundar från Sverige.
            Föreningen grundades 2012 med ett mål – att rädda avlivningshotade hundar och ge dem en andra chans till ett lyckligt och kärleksfullt liv.
            Vill du hjälpa en hund, samtidigt som du får en kär familjemedlem?
            Då har du hittat rätt!
        </p>
    </div>
</body>

</html>