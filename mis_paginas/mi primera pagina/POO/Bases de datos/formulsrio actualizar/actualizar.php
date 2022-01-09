<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ACTUALIZAR REGISTROS </title>
</head>

<body>

<?PHP

	/*$A=$_GET["A"];
	$B=$_GET["B"];
	$C=$_GET["C"];
	$D=$_GET["D"];
	$E=$_GET["E"];
	$F=$_GET["F"];
	$G=$_GET["G"];
	$H=$_GET["H"];
	$I=$_GET["I"];
	$J=$_GET["J"];
	$K=$_GET["K"];
	$L=$_GET["L"];*/

	require("Datos_conexion_BBDD.php");
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre);
	
		if(mysqli_connect_errno()){
		
		echo "Fallo al conectar con la base de datos verifique la ruta";
			
			exit();
		}
		
		mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la BBDD");
		mysqli_set_charset($conexion, "utf8");
		
		

	$consulta="UPDATE HOJA1 SET D='harina sarita' where D=harina";//A=$A,B=$B,C=$C,D=$D,E=$E,F=$F,G=$G,H=$H,I=$I,J=$J,K=$K,L=$L WHERE D=$D"; 

	
	$resultado=mysqli_query($conexion,$consulta);
	
	
	if($resultado==false){//abre llave de if
		echo "Error al guardar registro";
	}//cierra llave de if
	else{//abre llave de else
		echo "Registro guardado satisfactoriamente<br><br>";
		echo"<table><tr><td>$Nombre</td></tr>";
		echo"<tr><td>$Apellido</td></tr>";
		echo"<tr><td>$DNI</td></tr>";
		echo"<tr><td>$CUIT</td></tr></table>";	
		
		
	}//cierra llave del else
	
	
	mysqli_close($conexion);
	
?>
		

</body>
</html>