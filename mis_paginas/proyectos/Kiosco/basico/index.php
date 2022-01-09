<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>pimera pagina</title>
</head>

<body>
<?php
print  "bienvenidos al curso php <br>";//esto sale impreso en pantalla con un salto de linea 
print "Hola Alumnos<br>";
print "hasta el Proximo video<br>";
$nombre="Jorge";
$Edad=18;
print "Este alumno se llama $nombre y tiene $Edad <br>";

function DameDato(){

echo "Este es el mje de la funcion <br>";	
}
echo "Este Alumno se llama " . $nombre . " Y tiene " . $Edad . " Años <br>";

	DameDato();
	DameDato(); 
	
	?>


</body>
</html>