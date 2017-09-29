<?php
  var_dump ($_SESSION['logged']);

  function estaLogueado() {
    if (isset($_SESSION["usuario"])) {
      return true;
    }
    return false;
  }


  $_SESSION["usuario"]

$_SESSION["usuario"] = $_COOKIE["usuario"]


  $_COOKIE["usuario"]

/*
PASOS A SEGUIR: POR NICO

1 - Levantar todos los usuarios del json y convertirlos a array
file get contents
decode json
2 - Revisar que el mail ingresado existe para seguir a validar la contraseña

foreach ($variable as $key => $value) {
  if($value["email"] == $mailpasadoporpost) {

}
}

3 - Si el mail ingresado existe, validar la contraseña usando password_verify
password_verify("passwordingresadoporelusuarioenpost", "passwordhasheadodeladb"); true o false

4 - true - Generan la session con los datos que quieran (recomendación: usuario, contraseña)
NO SE OLVIDEN DE PONER SESSION_START() EN CADA PÁGINA
4 - false - error, hearthstone se abre con todo el volumen en clase, WELCOME BACK

5 - Si el usuario marcó la opción de recordarme -> crear la cookie con los mismos datos que la session

6 - Checkear en cada página si la cookie existe y la session NO existe, si es así, volver a generar la session con los datos de la cookie

7 - Botón de deslogueo
  session_destroy()
  setcookie("nombredecookie", "", time()-1);
*/
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Log in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
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
          <?php if (!empty($_SESSION['logged'])) { ?>
            <a class="navbar-brand" href="#"> <?php echo $_SESSION['user'] ?> </a>
          <?php } ?>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="registro.php">Registro</a></li>
            <li><a href="faq.php">FAQ</a></li>
          </ul>
        </div>
      </nav>
      <div class="logo">
        <a href="index.php">
          <img src="images/logo.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="250" height="250">
        </a>
      </div>
      <div class="row rompebolas">
        <div class="col-md-12">
            <div class="pr-wrap">
              <div class="pass-reset">
                <label>Enter the email you signed up with</label>
                <input type="email" placeholder="Email" />
                <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
              </div>
            </div>
          <div class="wrap">
              <p class="form-title">Sign In</p>
            <form class="login">
                <input type="text" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <input type="submit" value="Sign In" class="btn btn-success btn-sm" />
              <div class="remember-forgot">
                <div class="row">
                  <div class="col-md-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" />Remember Me
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6 forgot-pass-content">
                    <a href="javascription:void(0)" class="forgot-pass">Forgot Password</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
