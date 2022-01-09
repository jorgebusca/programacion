<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
	$nombre=$_GET["nombre"];
	$email=$_GET["email"];
	$telefono=$_GET["telefono"];
	$domicilio=$_GET["domicilio"];
	$inicio=$_GET["inicio"];
	$modificado=$_GET["modificado"];
	$actual=$_GET["actual"];

require("../conexiones/coneccion_bbdd_carta.php");

$coneccion=mysqli_connect($db_host, $db_usuario, $db_password);
	
	if(mysqli_connect_errno()){
		echo "fallo al conectar con la base de datos";
		
	exit();
	}
	
	mysqli_select_db($coneccion, $db_nombre) or die ("No se encuentra la BBDD");
	
	mysqli_set_charset($coneccion, "utf8");
	
	
$sql="INSERT INTO PRODUCTOS (id, nombre, email, telefono, domicilio, inicio, modificado, actual) VALUES ('$id', '$nombre', '$email', '$telefono', '$domicilio', '$inicio', '$modificado', '$actual')";
	
	$resultados=mysqli_query($coneccion,$sql);
	
	if($resultados==false){
		
		echo "no se ingresaron registros";
	}else{
		echo "Los registros se ingresaron satisfactoriamente";
	
		
	}
	
 
 	mysqli_close($coneccion);
?>

</body>
</html>