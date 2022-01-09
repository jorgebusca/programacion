<?php
	require "DevuelveProductos.php";
	
	$Nombre=$_GET["buscar"];
	
	$clientes=new DevuelveProductos();	
	
	$array_Clientes=$clientes->get_productos($Nombre); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Muestra clientes</title>
</head>

<body>
<?php
	
	foreach($array_Clientes as $elementos){
	
	echo "<table><tr><td>";
	echo $elementos['codigo'] . "</td><td>";
	echo $elementos['Nombre'] . "</td><td>";
	echo $elementos['Apellido'] . "</td><td>";	
	echo $elementos['DNI'] . "</td><td>";	
	echo $elementos['CUIT'] . "</td><td></tr></table>";
	
	echo"<br>";
	echo"<br>";
	
		}

?>

</body>
</html>