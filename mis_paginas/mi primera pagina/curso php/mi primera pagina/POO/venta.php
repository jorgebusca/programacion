<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	include ("consecionario.php");
	
	compra_vehiculo::descuento_gobierno();
	
	$compra_Antonio=new Compra_Vehiculo("urbano");
	$compra_Antonio->climatizador();
	$compra_Antonio->navegador_gps();
	$compra_Antonio->tapiceria_cuero("beige");
	echo "el precio total del vehiculo de Antonio es " . $compra_Antonio->precio_final() . "<br>";
	
	$compra_Ana=new Compra_Vehiculo("urbano");
	$compra_Ana->climatizador();
	$compra_Ana->navegador_gps();
	$compra_Ana->tapiceria_cuero("blanco");
	echo "el precio total del vehiculo de Ana es " . $compra_Ana->precio_final() . "<br>";
	

?>
</body>
</html>