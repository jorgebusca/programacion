<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>
	.resaltar{
		color:#03C;
		font-wehigt:bold;
	}
	</style>

</head>

<body>
<?php

$nombre="Juan";
echo "<p class='resaltar'>esto es un ejemplo de frase</p>";
echo "Hola $nombre <br>";
?>

<?php
$variable1="CASA";
$variable2="CASA";

$resultado=strcmp($variable1,$variable2);//Devuelve un 1 si no son iguales. devuelve 0 si son iguales
echo "Este programa me dice 1 si entre las palabras Casa y CASA NO se escriben iguales y 0 si se escriben iguales <br>";


echo "el resultado es $resultado <br>";

echo "ahora con un if<br>";


if($resultado){
	
echo "No se escriben iguales <br>";	
}else{
echo "Si se escriben iguales <br>";	
}


?>

<?php

	$var1="8";
	
	$var2="8";
	
	$var3="Jorge";
	
	
	if ($var1==$var2){
		
		echo "Si Son iguales <br>";
		
	}else{
		
		echo "No Son iguales <br>";
		
	}


?>

</body>
</html>