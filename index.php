<?php
require_once 'common_func.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Fill form in steps</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1">
    <!-- link css style sheet-->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    <div id="content">
      <div class="quote-wrap"><?php echo $advices->advice[$random_int]; ?></div>
      <button tabindex="2" id="add-quote" class="add-quote-button">
        <div class="dot-button"></div>
        <div class="dot-button"></div>
        <div class="dot-button"></div>
      </button>
    </div>
    <!-- TODO - ability to go back in form-->
    <div class="form-wrap">
      <div class="header-progress">
        <div class="dot current"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
      <form action="" method="GET" class="step-content">
        <div class="step is-showing"><span>Step 1/1</span>
          <input type="text" name="text" placeholder="Write here..." tabindex="2">
          <button type="submit" tabindex="4" class="button-next">Create</button>
        </div>
      </form>
    </div>
    <script src="step-form-behave.js"></script>
  </body>
</html>