<!doctype html>
<meta http-equiv=”Content-Type” content=”text/html; charset=ISO-8859-1″ />
<?php
  session_start();
  if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
    print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
  }
?>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Consulta de Pacientes</title>
<link rel="stylesheet" href="css/foundation.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/normalize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css">
<link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>
<body>

  <div class="row">

    <br>
    <?php include "php/navbar.php"; ?>
    <div class="large-12 columns">
      <h4>Seleccionar Paciente:</h4>
      <p>Digitar CI/RUC o Nombres/Apellidos</p>
      </div>
  </div>


  <div class="row">
      <div class="large-8 columns left">
      <form role="form" name="consulta" action="consultaSolicitudes.php" method="post">
        <div class="row collapse">
          <div class="large-10 small-8 columns">
            <input type="text" id="filtro" name="filtro" /></div>
              <button type="submit" class="button">Seleccionar</button>
        </div>
      </form>
      </div>
  </div>

    <footer class="row">
        <div class="large-12 columns">
          <hr>
          <div class="row">
            <div class="large-6 columns">
              <p>© Copyright luna developed with <3</p>
            </div>
            <div class="large-6 columns">
            <ul class="inline-list right">

            </ul>
            </div>
          </div>
        </div>
      </footer>


   
    <script src="js/bootstrap.min.js"></script>



</body>