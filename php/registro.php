<?php
	if(!empty($_POST)){
		if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
			if($_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
				include "conexion.php";
				
				$found=false;
				$sql1= "select * from t980101 where username=\"$_POST[username]\" or email=\"$_POST[email]\" or ciruc=\"$_POST[ciruc]\" ";
				$query = $con->query($sql1);
				while ($r=$query->fetch_array()) {
					$found=true;
					break;
				}
				if($found){
					print "<script>alert(\"Nombre de usuario, email o identificación personal ya se encuentran registrados.\");window.location='../registro.php';</script>";
				}else{
					$sql = "insert into t980101(username,fullname,email,password,created_at,ciruc) value (\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[email]\",\"$_POST[password]\",NOW(),\"$_POST[ciruc]\")";
					$query = $con->query($sql);
					if($query!=null){
						print "<script>alert(\"Registro exitoso. Proceda a Autentificarse.\");window.location='../index.php';</script>";
					}
				}
			}
		}
	}

?>