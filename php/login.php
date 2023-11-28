<?php
	if(!empty($_POST)){
		if(isset($_POST["username"]) &&isset($_POST["password"])){
			if($_POST["username"]!=""&&$_POST["password"]!=""){
				include "conexion.php";
				
				$user_id=null;
				$sql1= "select * from t9801 where szEmail=\"$_POST[username]\" and szPasw=\"$_POST[password]\" ";
				$query = $con->query($sql1);
				while ($r=$query->fetch_array()) {
					$user_id=$r["szUser"];
					break;
				}
				if($user_id==null){
					print "<script>alert(\"Acceso invalido.\");window.location='../index.php';</script>";
				}else{
					session_start();
					$_SESSION["user_id"]=$user_id;
					print "<script>window.location='../mesatrabajo.php';</script>";				
				}
			}
		}
	}
?>