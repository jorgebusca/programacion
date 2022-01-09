<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento eliminar registro</title>
</head>

<body>

<?PHP

	$CODIGO=$_GET["CODIGO"];

	require("Datos_conexion_BBDD.php");
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre);
	
		if(mysqli_connect_errno()){
		
		echo "Fallo al conectar con la base de datos verifique la ruta";
			
			exit();
		}
		
		mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la BBDD");
		mysqli_set_charset($conexion, "utf8");
		
		

	$consulta="DELETE FROM CLIENTES WHERE CODIGO='$CODIGO'"; 

	
	$resultado=mysqli_query($conexion,$consulta);
	
	
	if($resultado==false){
		echo "Error al eliminar registro";
	}
	else{
		if(mysqli_affected_rows($conexion)==0){
			echo "no hay registros que eliminar con ese criterio ";
		}if(mysqli_affected_rows($conexion)==1){
			echo"se ha eliminado 1 registro";
	}else{
			
		echo "se han eliminado " . mysqli_affected_rows($conexion) . " registros";
			}//cierra llave del else
	}
	
	mysqli_close($conexion);
	
?>
		

</body>
</html>