<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loguearse</title>
<style>
h1{text-align:center;
}
table{width:25%;
background:#39F;
border:2px dotted #FF0000;
margin:auto;}

.izq{text-align:right;}
.der{text-align:left;}
td{text-align:center;
padding:10px;}

		
</style>
</head>

<body>

<?php

		if (isset($_POST["enviar"])){
		
		try{
		$base=new PDO("mysql:host=localhost; dbname=pruebas", "root", ""); 
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM `usuarios` WHERE Usuario= :usuario AND Clave= :clave";
		$resultado=$base->prepare($sql);
		$login=htmlentities(addslashes($_POST["Login"]));
		$password=htmlentities(addslashes($_POST["Password"]));
		
		$resultado->bindValue(":usuario", $login);
		$resultado->bindValue(":clave", $password);
		$resultado->execute();
		
		$numero_registro=$resultado->rowCount();
		if($numero_registro!=0){
			//echo "<h2>FELICIDADES YA INGRESASTE!!!</h2>";
			
			session_start();
			
			$_SESSION["Usuario"]=$_POST["Login"];
			
			//header("Location:Usuarios_registrados_1.php");
		}else{
			//header("location:loguin.php");
			
			echo "ERROR de Usuario o Contraseña";
			
		}
		
		

		}catch(Exception $e){
			die("Error: " . $e->getMessage());
		}
		}
?>

<?php
if(!isset($_SESSION["Usuario"])){

	include("ingreso.html");
	
}else{
	
	echo "usuario conectado : " . $_SESSION["Usuario"];
}

?>

<h2 align="center">CONTENIDO DE LA WEB</h2>

<table width="800" border="2" align="center">
<tr><td><img src="IMAGENES/AAvF0m1.jpg" width="250" height="150" ></td>
<td><img src="IMAGENES/AAvF0ny.jpg" width="250" height="150" ></td></tr>
<tr><td><img src="IMAGENES/AAvF4QQ.jpg" width="250" height="150" ></td>
<td><img src="IMAGENES/AAvFbKn.jpg" width="250" height="150" ></td></tr>
</table>



</body>
</html>