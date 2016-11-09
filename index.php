<!DOCTYPE html>
<html>
  <head>
    <title>maximum of 60 characters including spaces here</title>
    <meta charset="UTF-8">
    <meta name="description" content="128 characters of message matching text with a call to action goes here">
    <meta name="keywords" content="maximum of 256 characters with spaces, only for old search engines">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Links-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- Fonts-->
    <!-- Open Sans 300 400 600-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300&amp;subset=latin,latin-ext" type="text/css">
    <!-- Roboto Slab 400 700-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;subset=latin,latin-ext" type="text/css">
    <!-- Roboro Condensed 400 700-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=latin,latin-ext" type="text/css">
    <!-- google reCAPTCHA API-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Favicon.ico-->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
  </head>
  <body>
    <div id="content">
      <div class="segment padding">
        <div id="google-street-view-container">
          <div id="google-street-view">
            <h1>Jméno společnosti<span class="smaller">.cz</span></h1>
          </div>
        </div>
      </div>
      <div style="margin-top: -60px; z-index: 20; position: relative; background: white;" class="segment padding">
        <div class="column">
          <h2>Stručně o prodejně:</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          </p>
          <hr>
          <h2>Otevřeno:</h2>
          <p>
            Po-Pá: 09:00-18:00 <br>
            Sobota: 09:00-12:00
          </p>
          <hr>
          <h2>Kontakt</h2>
          <p>
            Address: Company address 354, 620 01 City<br>
            Phone: +420 555 333 222<br>
            <a href="https://www.google.cz/maps/@49.1933351,16.6089298,19.5z?hl=cs" target="_blank">Zobrazit na mapě</a>
          </p>
          <hr>
        </div>
        <div class="column">
          <h2>Napište nám:</h2>
          <?php
            require_once('../helpers/contact_form_processor.php')
          ?>
          <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="submit">
            <input type="text" name="name" placeholder="Your name" required="" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>">
            <input type="text" name="email" required="" placeholder="E-mail" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
            <textarea name="message" placeholder="Message" required=""><?php if(isset($_POST['message'])) echo $_POST['message'];?></textarea>
            <?php echo "<div class='g-recaptcha' data-sitekey='" . $publickKeyRecaptcha . "'></div>"; ?>
            <input type="submit" value="Odeslat formulář" class="submit">
          </form>
        </div>
      </div>
    </div>
    <!-- JavaScrirpt-->
    <!-- smoothscroll + jQuery-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="../js/smoothscroll.js"></script>
    <!-- google street view API-->
    <script type="text/javascript" src="../js/setup_google_street_view.js"></script>
    <script type="text/javascript" src="../js/rotate_google_street_view.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjZ2fO312ub6di7tHbA4q5iK7ojbbZLyE&amp;callback=initPano"></script>
  </body>
</html>
