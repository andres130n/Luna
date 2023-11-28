<?php
	session_start();
	if(!empty($_POST)){
		
				include "conexion.php";
			
				//$idVendedor = $_SESSION["user_id"];
				//$sql = "insert into t579801(claveAcceso,creado,estado,mensaje,contadorProceso,actualizado,idUsuario,urlXML,urlPDF,ciruc,tipoDocumento) value (\"$_POST[claveAcceso]\",NOW(),'','PROCESANDO',0,NOW(), $id,'','','','')";
			

				//$query = $con->query($sql);
 				$query = "1";
				if($query!=null){
					print "<script>alert(\"Registro exitoso. Por favor espere un momento.\");window.location='../mesatrabajo.php';</script>";
				}
			
		
		
	}

?>