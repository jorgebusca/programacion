<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PAGINA_RESULTADOS_ACT</title>
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
	$busqueda=$_GET["buscar"];

	require ("../conexiones/coneccion_bbdd_la_paseandera.php");
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre);
	
		if(mysqli_connect_errno()){
		
		echo "Fallo al conectar con la base de datos verifique la ruta";			
		}
		
		mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la BBDD");
		mysqli_set_charset($conexion, "utf8");
	
	$consulta="SELECT * FROM productos WHERE id '%$busqueda%'";
	
	$resultado=mysqli_query($conexion,$consulta);
	
	$registros=1;
	
	while($fila=mysqli_fetch_array($resultado, MYSQL_ASSOC)){
		
		//  echo"<table><tr><td>";
		
		echo"<form action='Actualizar.php' metod= 'get'>";
		
		echo "<input type='text' name='id' value='" . $fila['id'] . "'><br>";			
			
		echo "<input type='text' name='fecha' value='" . $fila['fecha'] . "'><br>";
		
		echo "<input type='text' name='nombre' value='" . $fila['nombre'] . "'><br>";				

		echo "<input type='text' name='precio' value='" . $fila['precio'] . "'><br>";
	
		echo "<input type='text' name='kg' value='" . $fila['kg'] . "'><br>";
	
		echo "<input type='text' name='cantidad' value='" . $fila['cantidad'] . "'><br>";
		
		echo "<input type='submit' name='Modificar' id='Modificar' value='Modificar'<br>"; 
		
		echo "</form>";
		
		echo "</td></tr></table>";
	
	echo "<br>";
	
	echo "<br>";
	}
	
	mysqli_close($conexion);
?>
</body>
</html>