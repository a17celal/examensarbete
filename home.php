<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hundjouren</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="js.js"></script>
  </head>

  <body>
    <div class="navbar">
      <a id="home" class="active" href="home.php">Hem</a>
      <div class="dropdown">
        <button id="thedogs" class="dropbtn" onclick="myFunction()">
          Våra hundar
        </button>
        <div class="dropdown-content" id="myDropdown">
          <a id="thepuppies" href="puppies.php">Valpar</a>
          <a id="adults" href="adults.php">Fullvuxna</a>
          <a id="seniors" href="seniors.php">Seniorer</a>
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
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consequat blandit arcu, sed consequat dui
          fermentum sed. Nullam nec diam tortor. Morbi sodales, ante ac euismod feugiat, massa justo vulputate lectus,
          nec auctor arcu turpis vel eros. Curabitur vel scelerisque arcu, quis suscipit nunc. Aliquam vitae ipsum est.
          Vestibulum mattis pharetra eleifend. Maecenas interdum ullamcorper massa id congue. Fusce varius hendrerit
          mattis. Ut ac ex nibh. In ultrices tortor vitae sollicitudin imperdiet. Donec tristique tempus nibh, non
          ultricies metus. Aliquam erat volutpat. Proin velit mi, luctus a mi sed, commodo ullamcorper ante. Donec
          pulvinar erat at urna lobortis porttitor. Suspendisse commodo nunc augue, id molestie urna malesuada ac. Donec
          varius orci nec sollicitudin pharetra.
        </p>
      </div>
  </body>
</html>
