<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RESULTADO DE LA BUSQUEDA</title>
<style>
	table{
		column-count:auto;
		width:90%;
		background-color: #FF9;
		border:2px dotted #FF0000;
		
		margin:auto;
</style>
</head>

<body>

<?php 
	$busqueda=$_GET["buscar"];//este metodo trae lo que esta en la casilla de texto en el formulario con el nombre "name"

	require("Datos_conexion.php");//Esta linea hace referencia a la pagina de coneccion la cual guarda la informacion de la base de datos sql
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre);//esta linea busca los datos y conecta con la base de datos
	
		if(mysqli_connect_errno()){//Esta linea detecta errores en la conexion Mysql
		
		echo "Fallo al conectar con la base de datos verifique la ruta";
			
			
		}
		
		mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la BBDD");//esta linea nos conecta con la base de datos 
		mysqli_set_charset($conexion, "utf8");
	
	//$consulta="select * from hoja1 where D like '%$busqueda%'";
	
	$consulta="select * from hoja1 where D = '$busqueda'";
	
	echo"$consulta <br><br>";
	
	$resultado=mysqli_query($conexion,$consulta);
	
	//$registros=1;
	
	while($fila=mysqli_fetch_row($resultado)){
		
		echo"<table><tr><td>";
	
	echo $fila[0] . "</td><td>";
	
	echo $fila[1] . "</td><td>";

	echo $fila[2] . "</td><td>";
	
	echo $fila[3] . "</td><td>";
	
	echo $fila[4] . "</td><td>";
	
	echo $fila[5] . "</td><td>";

	echo $fila[6] . "</td><td> ";
	
	echo $fila[7] . "</td><td> ";
	
	echo $fila[8] . "</td><td> ";
	
	echo $fila[9] . "</td><td> ";

	echo $fila[10] . "</td><td> ";
	
	echo $fila[11] . "</td><td></tr></table>";
	
	echo "<br>";
	
	echo "<br>";
	}
	
	mysqli_close($conexion);
?>
</body>
</html>