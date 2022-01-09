<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta POO</title>
<style>
h1{
	text-align:center;
	color:#00F;
	border-bottom:double #0000FF;
	width:90%;
	margin:auto;
	
}
	
	table{
		border:1px solid #F00;
		padding:20px 50px;
		margin-top:50px;
	}
	body{
		background-color:#FFC;
	}
</style>
</head>

<body>
<?php

	$conexion=new mysqli("localhost", "root", "", "pruebas");
	
	if($conexion->connect_errno){
	echo "fallo la conexion" . $conexion->connect_errno;
		
	}
	
	//mysqli_set_charset($conexion, "utf8");  //Forma presedimental
	$conexion->set_charset("utf8");  //Forma POO

	$sql="SELECT * FROM CLIENTES";

	$resultados=$conexion->query($sql);
	
	if($conexion->errno){
		die($conexion->error);
		
	}
	//while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){ //Forma presedimental
	
	while($fila=$resultados->fetch_assoc()){ //Forma POO
	  
	 echo "<table><tr><td>";
	 
	 echo "codigo" . "</td><td>" . $fila['codigo'] . "</td><td>";
	 echo "Nombre" . "</td><td>" .  $fila['Nombre'] . "</td><td>";
	 echo "Apellido" . "</td><td>" .  $fila['Apellido'] . "</td><td>";
	 echo "DNI" . "</td><td>" .  $fila['DNI'] . "</td><td>";
	 echo "CUIT" . "</td><td>" .  $fila['CUIT'] . "</td><td></tr></table>";
	 
	 echo"<br>";
	 
	}
	
	//mysqli_close($conexion);  //Forma presedimental
	
	$conexion->close();  //Forma POO

?>



</body>
</html>