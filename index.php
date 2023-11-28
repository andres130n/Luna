<!doctype html>
<?php session_start(); ?>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=ISO-8859-1″ />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Examens :: Kerlilab</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  </head>

  <body>

    <br>

    <div class="row">

      <?php include "php/navbar.php"; ?>

    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <h3>Bienvenido a su portal Laboratorio B & T.</h3>
        </div>
      </div>
        <div class="grid-x grid-padding-x">
          <div class="large-8 medium-8 cell">
        
            <h5>Por favor ingresar su credenciales para acceder la consulta de comprobantes:</h5>
            <form role="form" name="login" action="php/login.php" method="post">
              <div class="grid-x grid-padding-x">
                <div class="large-12 cell">
                  <label>Usuario</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Digite su correo." />
                </div>
              </div>

              <div class="grid-x grid-padding-x">
                <div class="large-12 cell">
                  <label>Credencial</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Digite su contraseña" />
                </div>
              </div>

              <p><button type="submit" class="button">Ingresar</button><br/>

            </form>
          </div>

          <div class="large-4 medium-4 cell">
            <div class="grid-x grid-padding-x">
              <div class="primary callout">
                <h5><b>Comunicamos:</b></h5>
                <p>Se trata de una propuesta creativa para consultar sus comprobantes electronicos, preservando la naturaleza,  disminuyendo el consumo de los recursos de su negocio.</p>
                <p>Presentamos una solución de calidad, flexible y escalable para su negocio, independiente al sistema informatico que utiliza.</p>
                <li>Información disponible 24 horas/ 7 días a la semana.</li>
              </div>
            </div>
          </div>

        </div>
      </div>

      </div>

      <footer class="row">
        <div class="large-12 columns">
          <hr>
          <div class="row">
            <div class="large-6 columns">
              <p>© Copyright Luna developed with <3</p>
            </div>
            <div class="large-6 columns">
            <ul class="inline-list right">

            </ul>
            </div>
          </div>
        </div>
      </footer>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    
  </body>
</html>
