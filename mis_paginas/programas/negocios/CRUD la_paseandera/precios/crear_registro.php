<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingreso de Datos</title>
</head>

<body> 
<?php
include ("coneccion.php");

$id=$_GET["id"];
$fecha=$_GET["fecha"];
$producto=$_GET["producto"];
$precio=$_GET["precio"];

$sql="INSERT INTO PRECIOS (fecha, producto, precio) VALUE(:FECHA, :PRODUCTO, :PRECIO)";

$RESULTADO=$base->prepare($sql);
$RESULTADO->execute(array(":ID"=>$id, ":FECHA"=>$fecha, ":PRODUCTO"=>$producto, ":PRECIO"=>$precio));

header("Location:lista_precios.php");






?>
</body>
</html>