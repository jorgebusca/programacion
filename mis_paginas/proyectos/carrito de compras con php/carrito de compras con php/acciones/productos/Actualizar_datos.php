<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Actualizar datos</title>
</head>

<body>

<?php
	$id=$_GET["id"];
	$fecha=$_GET["fecha"];
	$nombre=$_GET["nombre"];
	$precio=$_GET["precio"];
	$kg=$_GET["kg"];
	$cantidad=$_GET["cantidad"];

require("../conexiones/coneccion_bbdd_carta.php");

$coneccion=mysqli_connect($db_host, $db_usuario, $db_password);
	
	if(mysqli_connect_errno()){
		echo "fallo al conectar con la base de datos";
		
	exit();
	}
	
	mysqli_select_db($coneccion, $db_nombre) or die ("No se encuentra la BBDD");
	
	mysqli_set_charset($coneccion, "utf8");
//--------------------------------------------------------------------------------------------------------------------------------	
	
/*$sql="INSERT INTO PRODUCTOS (fecha, nombre, precio, kg, cantidad) VALUES ('$fecha', '$nombre', '$precio', '$kg', '$cantidad')";
	
	$resultados=mysqli_query($coneccion,$sql);
 
 	mysqli_close($coneccion);*/
//--------------------------------------------------------------------------------------------------------------------------------

$consulta="UPDATE productos SET id='$id',fecha='$fecha', nombre='$nombre', precio='$precio', kg='$kg', cantidad='$cantidad' WHERE id='$id'";
		
	$resultado=mysqli_query($conexion,$consulta);
		
	if($resultado==false){//abre llave de if
		echo "Error al guardar registro";
	}//cierra llave de if
	else{//abre llave de else
		echo "Registro guardado satisfactoriamente<br><br>";
		echo"<table><tr><td>$id</td></tr>";
		echo"<tr><td>$fecha</td></tr>";
		echo"<tr><td>$nombre</td></tr>";		
		echo"<tr><td>$kg</td></tr>";
		echo"<tr><td>$cantidad</td></tr></table>";
		
		
	}//cierra llave del else
	
	
	mysqli_close($conexion);
	
?>
</body>
</html>