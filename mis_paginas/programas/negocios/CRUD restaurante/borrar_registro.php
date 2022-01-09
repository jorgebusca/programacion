<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Borrado de Registro</title>
</head>

<body> 
<?php
include ("coneccion.php");

$orden=$_GET["Orden"];

$base->query("DELETE FROM DATOS WHERE Orden='$orden'");

header ("Location:index.php");






?>
</body>
</html>