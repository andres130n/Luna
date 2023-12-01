<?php
  session_start();
  if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
    print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
  }
?>

<!DOCTYPE html>

<html lang="en">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Mesa de trabajo</title>
        <script src="https://kit.fontawesome.com/fa20bd5746.js" crossorigin="anonymous"></script>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="../webroot/img/server.ico" type="image/ico"  />
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Laboratorio</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-center ">
                      <li class="nav-item"> <a class="nav-link active" href="mesatrabajo.php">Principal</a> </li>
                      <li class="nav-item"><a class="nav-link " href="./php/logout.php">Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">

            <div class="row row-offcanvas row-offcanvas-left">



                <div class="main">

                    <!--toggle sidebar button-->
                    <p class="visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
                    </p>

                    <h3>Busca tu examen </h3>
                   
                    
                   
                    <form method = "post">
                        <table class="table">
                            <tr>
                                <td>Cedula / Ruc:</td>
                                <td><input type="text" name="filtro" class="form-control"></td>
                                <td><button type="submit" class ='btn btn-link' >
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button> </td>
                            </tr>
                        </table>
                    </form>
                    <?php

                      $post = (isset($_POST['filtro']));

                      if (( $post ) &&  $_POST['filtro'] != null){

                        $validaDatos = false;

                        $informe = "";

                          include "php/conexion.php";

                          $filtro = $_POST["filtro"];
              
                          $sql= " SELECT mnNroDireccion, szTipoPersona, szNombreApellido, szIdentificadorFiscal, szDireccion1, szCorreo FROM t0101 WHERE szNombreApellido LIKE '%".$filtro."%' OR mnNroDireccion LIKE '%".$filtro."%' ";
              
                          $query = $con->query($sql);

                              while ($row=$query->fetch_array()) {
                                $validaDatos = true;                                
                              }

                              if ($validaDatos){
                                ?>
                                  <table class='table table-hover' id='dev-table'>
                                    <tr>  
                                      <th scope='col'>Acción</th>
                                      <th scope='col'>Nombreeee</th>  
                                      <th scope='col'>RUC/CI</th>
                                      <th scope='col'>Dirección</th>  
                                    </tr>  
                                  <tbody>
                                <?php
                                 $query = $con->query($sql);
                                  while ($row=$query->fetch_array()) {
                                    echo "<tr>";
                                       echo "<td>      
                                       <form action='seleccionPersona.php' method='post'>
                                          <input type='text' style='display: none;' id='identificacion' name='identificacion' value='".$row[0]."' />
                                          <button type='submit' class='btn btn-link'> <i class='fa-solid fa-magnifying-glass'></i></button>                            
                                       </form>
                                       </td>";     
                                      echo "<td>".$row[2]."</td>";
                                      echo "<td>".$row[3]."</td>"; 
                                      echo "<td>".$row[4]."</td>";   
                                      echo "</tr>"; 
                                  }
                                ?>
                                </tbody>
  		                        </table>
                              <?php

                              }else{
                                ?>
                                  <center><img src="webroot/img/img4.jpg" class='img-responsive'/></center>
                                <?PHP
                              }    


                              

                      }else{
                        ?>
                          <center><img src="webroot/img/img4.jpg" class='img-responsive'/></center>
                        <?PHP
                      }

                    ?>
                </div><!--/row-->
            </div>
        </div><!--/.container-->

        <footer>
            <hr> 
            <p class="pull-right"></p>
        </footer>

        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>