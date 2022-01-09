<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

	$CODIGO=$_GET("CODIGO");	
	$NOMBRE=$_GET("NOMBRE");	
	$APELLIDO=$_GET("APELLIDO");	
	$TELEFONO=$_GET("TELEFONO");	
	$DOMICILIO=$_GET("DOMICILIO");	
	$DNI=$_GET("DNI");	
	$CUIT=$_GET("CUIT");	
	
	
	
	
	require("coneccion_bbdd2.php");
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre);
	
		if(mysqli_connect_errno()){
		
		echo "Fallo al conectar con la base de datos verifique la ruta";
			
			exit();
		}
		
		mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la BBDD");
		mysqli_set_charset($conexion, "utf8");
		
		$sql="INSERT INTO DATOS_PERSONAL (CODIGO, NOMBRE, CONTRASEÑA, TELEFONO, DOMICILIO, DNI, CUIT) VALUES (?,?,?,?,?,?,?)";
		
		$Resultado=mysqli_prepare($conexion, $sql);
		$OK=mysqli_stmt_bind_param($Resultado, "SSSSSSSS", $CODIGO, $NOMBRE, $APELLIDO, $TELEFONO, $DOMICILIO, $DNI, $CUIT);
		
		$OK=mysqli_stmt_execute($Resultado);
		
		if($OK==false){
			echo"Error al ejecutar la consulta";
			
		}else{
			$OK=mysqli_stmt_bind_result($Resultado, $codigo, $nombre,$contraseña, $telefono, $domicilio);	
			
			echo "Personas encontradas: <br><br>";
			while(mysqli_stmt_fetch($Resultado)){
				echo $codigo . " " . $nombre . " " . $contraseña . " " . $telefono . " " . $domicilio;
				
			}
			
			mysqli_stmt_close($Resultado);
			
		}

?>

</body>
</html>