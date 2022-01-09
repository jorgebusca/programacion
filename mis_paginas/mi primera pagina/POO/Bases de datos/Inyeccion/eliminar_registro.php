<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>eliminar registro</title>
</head>

<body>

<?PHP

	 $USUARIO=$_GET["Usu"];
	 $CONTRASEÑA=$_GET["Con"];

	require("coneccion_bbdd2.php");
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre);
	
	$USUARIO = mysqli_real_escape_string ($conexion, $_GET["Usu"]);
	$CONTRASEÑA = mysqli_real_escape_string ($conexion, $_GET["Con"]);	
	
		if(mysqli_connect_errno()){
		
		echo "Fallo al conectar con la base de datos verifique la ruta";
			
			exit();
		}
		
		mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la BBDD");
		mysqli_set_charset($conexion, "utf8");
		
		
	$consulta="DELETE FROM usuarios WHERE NOMBRE='$USUARIO' and CONTRASEÑA='$CONTRASEÑA'"; 
		echo $consulta . "<br><br>";
	
	mysqli_query($conexion,$consulta);
	
	if(mysqli_affected_rows($conexion)>0){
	
		echo "Usuario eliminado <br>";
	
	}else{
		echo "no se eliminaron usuarios <br>";
		
	}
	
	if(mysqli_query($conexion, $consulta)){			
		echo "registro eliminado ";
	
	}
	mysqli_close($conexion);
	
?>
		

</body>
</html>