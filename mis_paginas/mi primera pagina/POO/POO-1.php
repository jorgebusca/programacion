<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php

include("vehiculo.php");

$mazda=new Coche();

$volvo=new Camion();

echo "<p class=\"validado\">" . "el auto mazda tiene " . $mazda->get_ruedas() . " ruedas  <br>";


echo "<p class=\"no_validado\">" . "el camion volvo tiene " . $volvo->get_ruedas() . " ruedas <br>";

echo "El camion tiene un motor " . $volvo->motor . " cilindradas <br>";

$volvo->establece_color("amarillo","volvo");
 
 $volvo->arrancar();

?>


<body>
</body>
</html>