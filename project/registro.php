<!DOCTYPE html>
<html>
  <head>
    <title>Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registro.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Log in</a></li>
            <li><a href="faq.php">FAQ</a></li>
          </ul>
        </div>
      </div>
    </nav>
        <div class="logo">
            <a href="home.html">
            <img src="images/logo.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="250" height="250">
          </a>
        </div>
      <div class="form-style-5">
      <form>
          <fieldset>
              <legend><span class="number">1</span> e-Commerce Info</legend>
              <input type="text" name="field1" placeholder="Nombre del e-Commerce *">
              <input type="email" name="field2" placeholder="Email de contacto *">
              <input type="text" name="field3" placeholder="Contraseña *">
              <input type="text" name="field4" placeholder="Repetir Contraseña *">
              <input type="text" name="field5" placeholder="Telefono de contacto *">
              <input type="text" name="field6" placeholder="Provincia *">
              <input type="text" name="field7" placeholder="Ciudad *">
              <input type="text" name="field8" placeholder="Direccion principal *">
              <textarea name="field3" placeholder="Breve descripcion de la sucursal"></textarea>
              <label for="job">Tipo de contribuyente</label>
          </fieldset>
          <fieldset>
            <legend><span class="number">2</span> Sucursales</legend>
            <textarea name="field3" placeholder="Direccion y email de contacto de cada sucursal"></textarea>
          </fieldset>
        <input type="submit" value="Apply" />
      </form>
    </div>
  </body>
</html>
