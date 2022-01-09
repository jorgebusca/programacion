<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	define("AUTOR", "JORGE" . TRUE);//Con define nombramos una constante y dentro del parentesis le damos un nombre y un valor 	
	echo "El autor es : " . AUTOR . "<br>";//llamamos a la constante por su nombre y la imprimimos con la indicacion echo
	echo "La linea de esta instruccion es : " . __LINE__ . "<br>";//en esta linea imprimimos el numero de linea 


	echo "Estamos trabajando con la siguiente ruta: " . __file__;//Imprimimos la ruta del archivo
?>

</body>
</html>