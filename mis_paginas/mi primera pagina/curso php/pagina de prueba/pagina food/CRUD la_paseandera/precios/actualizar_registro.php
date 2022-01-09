<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>actualizar</title>
</head>

<body> 

<h1 align="center">Actualizar Registros</h1>
<p>
  <?php
  include("coneccion.php");
  
  $id=$_GET["id"];
  $fecha=$_GET["fecha"];
  $producto=$_GET["producto"];
  $precio=$_GET["precio"];
  
  $sql=" UPDATE SET PRECIOS fecha, producto, precio";
  
  
  
  ?>
<form method="POST" name="formularioA" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table align="center" border="2" bgcolor="#00FF00">
<tr>
<td>id</td>
<td><input name="id" type= "hidden=" value="<?php echo $id ?>"/></td>
</tr>
<tr>
<td>fecha</td>
<td><input name="fecha" id="fecha" type="text" value="<?php echo $fecha ?>"/></td>
</tr>




</tr>
</table>
</form>


</body>
</html>