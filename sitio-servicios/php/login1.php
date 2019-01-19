<?php

if(!empty($_POST)){
	if(isset($_POST["txtUsu"]) &&isset($_POST["txtCon"])){
		if($_POST["txtUsu"]!=""&&$_POST["txtCon"]!=""){
			include "conexion.1php.php";
			
			$user_id=null;
			$sql1= "select * from usuario where (nombre_usuario=\"$_POST[txtUsu]\" and cont_usuario=\"$_POST[txtCon]\" )";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id_usuario"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../menu.php';</script>";				
			}
		}
	}
}



?>