<?php

if (isset($_COOKIE)) {
  session_start();
  foreach ($_COOKIE as $key => $value) {
    $_SESSION["$key"] = "$value";
  }
} else {
  session_start();
}

if (isset($_SESSION['error'])) {
  $_SESSION["error"] = null;
}
if (isset($_SESSION['errores'])) {
 $_SESSION["errores"] = null;
}
if (isset($_SESSION['inputsValues'])) {
  $_SESSION['inputsValues'] = null;
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Unify Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <div class="contenedor">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php if (isset($_SESSION['nombre'])) { ?>
            <a class="navbar-brand" ><?php echo "Hola,". $_SESSION['nombre']."!"; ?></a>
        <?php } ?>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <?php if (isset($_SESSION['nombre'])) { ?>
                <li><a href="faq.php">FAQ</a></li>
            <li><a href="controllers/logout.controller.php">Log-Out</a></li>
          <?php } else { ?>
            <li><a href="login.php">Log in</a></li>
            <li><a href="registro.php">Register</a></li>
            <li><a href="faq.php">FAQ</a></li>
          <?php } ?>
          </ul>
        </div>
      </nav>
      <div class="container-fluid bg-1 text-center">
        <h3 class="margin">Welcome to:</h3>
          <img src="images/logosinborde.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
        <h3>Uniting e-Commerces socially</h3>
      </div>
      <div class="container-fluid bg-2 text-center">
        <h3 class="margin">Why Unify?</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      </div>
      <div class="container-fluid bg-3 text-center">
          <h3 class="margin">What do we offer?</h3><br>
        <div class="row">
          <div class="col-sm-4">
            <h3>Platform</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <img src="images/platform.jpg" class="img-responsive margin" style="width:100%" alt="Image">
          </div>
          <div class="col-sm-4">
            <h3>Easy access for costumers</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <img src="images/costumers.jpg" class="img-responsive margin" style="width:100%" alt="Image">
          </div>
          <div class="col-sm-4">
            <h3>Friendly Enviroment</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <img src="images/friendly.jpg" class="img-responsive margin" style="width:100%" alt="Image">
          </div>
        </div>
      </div>
      <footer class="container-fluid bg-4 text-center">
        <p> <a href="#">Back to the top</a></p>
      </footer>
    </div>
  </body>
</html>
