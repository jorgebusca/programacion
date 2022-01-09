<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>crear usuario</title>
</head>

<body>

<?php
	
	$Usuario=$_POST["Usuario"];
	$Contraseña=$_POST["Contraseña"];
	
	$cifrado=password_hash($Contraseña, PASSWORD_DEFAULT);
	
	try{
		$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$base->exec("SET CHARACTER SET utf8");

$sql="INSERT INTO usuarios (usuario, clave) VALUES (':usu', ':contra')";
	
	$resultados=$base->prepare($sql);
	
	$resultado->execute(array(":usu"=>$Usuario, ":contra"=>$cifrado));
	
		echo "Los registros se ingresaron satisfactoriamente";
	
		$resultado->closeCursor();
		
	}catch(Exception $e){
		
		echo "Linea del error " . $e->getLine();
	}
	
 
 require("../Configuracion.php");
 	
?>

</body>
</html>