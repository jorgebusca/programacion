<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insertando registro</title>
</head>

<body>

<?php 

/*$id=$_GET["id"];
$nombre=$_GET["nombre"];
$precio=$_GET["precio"];
$kg=$_GET["kg"];
$cantidad=$_GET["cantidad"];*/


require("coneccion_bbdd.php");

$conexion=mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);


if(mysqli_connect_errno()){

echo"Fallo al conectar con la base de datos verifique la ruta de coneccion";

exit();	
	
}
	mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la BBDD");
		mysqli_set_charset($conexion, "utf8");
		
		
	$consulta="INSERT INTO productos (id, fecha, nombre, precio, kg, cantidad) VALUES ('1', 'fecha', 'nombre', '330', '2', '14')";
	
	$resultado=mysqli_query($conexion,$consulta);
	
	
	if($resultado==false){//abre llave de if
		echo "Error al guardar registro";
	}//cierra llave de if
	else{//abre llave de else
		echo "Registro guardado satisfactoriamente<br><br>";
		echo"<table><tr><td>$id</td></tr>";
		echo"<tr><td>$nombre</td></tr>";
		echo"<tr><td>$precio</td></tr>";
		echo"<tr><td>$kg</td></tr>";
		echo"<tr><td>$cantidad</td></tr>;
		</table>";	
		
		
	}//cierra llave del else
	
	
	mysqli_close($conexion);
	
	
	
?>

</body>
</html>