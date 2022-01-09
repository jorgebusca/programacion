<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Compueba loguin</title>
</head>

<body>
<?php
try{
	$base=new PDO("mysql:host=localhost; db_name=carta", "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM CLIENTES WHERE NOMBRE_USUARIO=:usuario AND password=:password";
	$resultado=$base->prepare($sql);
	
	$loguin=htmlentities(addslashes($_POST["login"]));
	$password=htmlentities(addslashes($_POST["password"]));
	$resultado->binValue(":loguin", $loguin);
	$resultado->binValue(":password", $password);
	
	$resultado->execute();
	
	$numero_registro=$resultado->rowCount();
	
	if($numero_registro!=0){
		echo "<h2>Adelante!!!</h2>";
		
	}else{
		header("location:loguin.php");
		
	}
	
}catch(Exception $e){
	
	
	die("Error: " . $e->getMessage());
}


?>
</body>
</html>