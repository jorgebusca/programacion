<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORMULARIO Y BUSQUEDA </title>

<?php 

	function ejecuta_consulta($labusqueda){
		
	require("Datos_conexion_BBDD.php");
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre);
	
		if(mysqli_connect_errno()){
		
		echo "Fallo al conectar con la base de datos verifique la ruta";
			
			exit();
		}
		
		mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la BBDD");
		mysqli_set_charset($conexion, "utf8");
	
	$consulta="SELECT * FROM hoja1 where D like '$labusqueda'";

	
	$resultado=mysqli_query($conexion,$consulta);
	
	//$registros=1;
	
	while($fila=mysqli_fetch_array($resultado, MYSQL_ASSOC)){
		
		echo"<table><tr><td>";
	
	echo $fila['A'] . "</td><td>";
	
	echo $fila['B'] . "</td><td>";

	echo $fila['C'] . "</td><td>";
	
	echo $fila['D'] . "</td><td>";
	
	echo $fila['E'] . "</td><td>";
	
	echo $fila['F'] . "</td><td>";

	echo $fila['G'] . "</td><td> ";
	
	echo $fila['H'] . "</td><td> ";
	
	echo $fila['I'] . "</td><td> ";
	
	echo $fila['J'] . "</td><td> ";

	echo $fila['K'] . "</td><td> ";
	
	echo $fila['L'] . "</td><td></tr></table>";
	
	echo "<br>";
	
	//echo "<br>";
	}
	
	mysqli_close($conexion);
		}
	
?>
</head>

<body>
		<?php
				$mibusqueda=$_GET["buscar"];
				$mipag=$_SERVER["PHP_SELF"];
				
				
				if($mibusqueda!=NULL){
					
					ejecuta_consulta($mibusqueda);
				}else{
					echo ("<form action='" . $mipag . "' method='get'><label>Buscar: <input type='text' name='buscar'></label>
					<input type='submit' name='enviando' value='BUSCAR'>
					</form>");
					}
		
		?>


</body>
</html>