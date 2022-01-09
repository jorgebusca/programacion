<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
	//$id=$_GET["id"];
	/*$fecha=$_GET["fecha"];
	$nombre=$_GET["nombre"];
	$precio=$_GET["precio"];
	$kg=$_GET["kg"];
	$cantidad=$_GET["cantidad"];*/

require("../conexiones/coneccion_bbdd_la_paseandera.php");

$coneccion=mysqli_connect($db_host, $db_usuario, $db_password);
	
	if(mysqli_connect_errno()){
		echo "fallo al conectar con la base de datos";
		
	exit();
	}
	
	mysqli_select_db($coneccion, $db_nombre) or die ("No se encuentra la BBDD");
	
	mysqli_set_charset($coneccion, "utf8");
	
	$consulta="select * from PRODUCTOS ";
	
	$resultado=mysqli_query($coneccion,$consulta);
	
	$registros=1;
	
	while($fila=mysqli_fetch_row($resultado)){
		
		echo"<table><tr><td>";
	
	echo $fila[0] . "</td><td>";
	
	echo $fila[1] . "</td><td>";

	echo $fila[2] . "</td><td>";
	
	echo $fila[3] . "</td><td>";
	
	echo $fila[4] . "</td><td>";
	
	echo $fila[5] . "</td><td></tr></table>";

	echo "<br>";
	
	echo "<br>";
	}
	
	mysqli_close($conexion);
?>
</body>
</html>