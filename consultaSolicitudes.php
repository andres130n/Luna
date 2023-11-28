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
<title>Consulta de Clientes / Proveedores</title>

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
      <h4>Clientes / Proveedores</h4>
      </div>
  </div>

  <!--Seleccion del cliente --> 
  <div class="row">
      <div class="large-12 columns">
        <table class='table table-hover' id='dev-table'>
        <tr>  
           <th scope='col'>Acción</th>
          <th scope='col'>Nombre</th>  
          <th scope='col'>RUC/CI</th>
          <th scope='col'>Dirección</th>  
        </tr>  

    		  <?php

          $post = (isset($_POST['filtro']));

          if ( $post ) {

            include "php/conexion.php";

            $filtro = $_POST["filtro"];

            $sql= " SELECT mnNroDireccion, szTipoPersona, szNombreApellido, szIdentificadorFiscal, szDireccion1, szCorreo FROM t0101 WHERE szNombreApellido LIKE '%".$filtro."%' OR mnNroDireccion LIKE '%".$filtro."%' ";

            $query = $con->query($sql);

      			echo "<tbody>";  

        				while ($row=$query->fetch_array()) {

        					echo "<tr>";
                     echo "<td>      
                     <form role='form' name='consulta' action='seleccionPersona.php' method='post'>
                        <div class='row collapse'>
                            <input type='text' style='display: none;' id='identificacion' name='identificacion' value='".$row[0]."' />
                            <button type='submit' class='button'>Seleccionar</button>
                        </div>
                     </form>
                     </td>";     
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>"; 
                    echo "<td>".$row[4]."</td>";   
        				    echo "</tr>"; 
        				}

              }
              else
              {
              echo "No se filtro correctamente.";
              }
    		  ?>

  			</tbody>
  		</table>

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


  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation.min.js"></script>
  <script>
        $(document).foundation();
      </script>

   <!-- jQuery search redex -->
    <script src="js/jquery.js"></script>
    
    <script type="text/javascript">
    (function(){
        'use strict';
        var $ = jQuery;
        $.fn.extend({
            filterTable: function(){
                return this.each(function(){
                    $(this).on('keyup', function(e){
                        var $this = $(this), search = $this.val().toLowerCase(), target = $this.attr('data-filters'), $rows = $(target).find('tbody tr');
                        if(search == '') {
                            $rows.show(); 
                        } else {
                            $rows.each(function(){
                                var $this = $(this);
                                $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
                            })
                        }
                    });
                });
            }
        });
        $('[data-action="filter"]').filterTable();
    })(jQuery);

    $(function(){
        // attach table filter plugin to inputs
        $('[data-action="filter"]').filterTable();
        
        $('.container').on('click', '.panel-heading span.filter', function(e){
            var $this = $(this), 
                    $panel = $this.parents('.panel');
            
            $panel.find('.panel-body').slideToggle();
            if($this.css('display') != 'none') {
                $panel.find('.panel-body input').focus();
            }
        });
        $('[data-toggle="tooltip"]').tooltip();
    })

    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</body>