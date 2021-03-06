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
};

if (isset($_SESSION['errores'])) {
 $_SESSION["errores"] = null;
};

if (isset($_SESSION['inputsValues'])) {
  $_SESSION['inputsValues'] = null;
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Unify FaQ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/faq.css">
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
            <li><a href="index.php">Home</a></li>
            <?php if (isset($_SESSION['nombre'])) { ?>
            <li><a href="controllers/logout.controller.php">Log-Out</a></li>
          <?php } else { ?>
            <li><a href="login.php">Log in</a></li>
            <li><a href="registro.php">Register</a></li>
          <?php } ?>
          </ul>
        </div>
      </nav>
      <div class="container-fluid bg-2 text-center rompebolas" >
        <h3 class="" >.</h3>
        <div class="logo"  style="position: absolute;">
          <img src="images/logo.png" class="img-responsive img-circle margin " style="display:inline " alt="Bird" width="350" height="350">
        </div>
      </div>
      <div class="container-fluid bg-3 text-center">
        <h3 class="margin">Frequently asked questions:</h3><br>
          <div class="panel-group" id="faqAccordion">
            <div class="panel panel-default ">
              <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                <h4 class="panel-title">
                  <a href="#" class="ing">Q: Who are we?</a>
                </h4>
              </div>
              <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and  more  recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
                </div>
              </div>
            </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                  <h4 class="panel-title">
                    <a href="#" class="ing">Q: How does the service works?</a>
                  </h4>
                </div>
                <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                  <h4 class="panel-title">
                    <a href="#" class="ing">Q: Why does my e-Commerce doesn't aplly?</a>
                  </h4>
                </div>
                <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                  <h4 class="panel-title">
                    <a href="#" class="ing">Q: How can I invite other commerces? </a>
                  </h4>
                </div>
                <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
                <div class="panel panel-default ">
                  <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                    <h4 class="panel-title">
                      <a class="ing">Q: How can I make a suggestion? </a>
                    </h4>
                  </div>
                  <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      <footer class="container-fluid bg-4 text-center">
        <p> <a href="#">Back to the top</a></p>
      </footer>
    </div>
  </body>
</html>
