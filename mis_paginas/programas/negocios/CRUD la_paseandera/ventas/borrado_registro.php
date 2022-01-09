<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Borrendo registro</title>
</head>

<body>
<?php 
include("coneccion.php");
$id=$_GET["id"];
$base->query("DELETE FROM VENTAS WHERE id='$id'");
header("Location:ventas.php");

?>
</body>
</html>