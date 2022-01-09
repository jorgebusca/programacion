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
  
  if(!isset($_POST["bot_actualizar"])){
  
  $id=$_GET["id"];
  $fecha=$_GET["fecha"];
  $producto=$_GET["producto"];
  $precio=$_GET["precio"];
  
  }else{
  	  
	$id=$_POST["id"];
	$fecha=$_POST["fecha"];
	$producto=$_POST["producto"];
	$precio=$_POST["precio"];
  
  
  $sql=" UPDATE PRECIOS SET id=:miId, fecha=:miFecha, producto=:miProducto, precio=:miPrecio WHERE id=:miId";
  
  $resultado=$base->prepare($sql);
  $resultado->execute(array(":miId"=>$id, ":miFecha"=>$fecha, ":miProducto"=>$producto, ":miPrecio"=>$precio));
  
  header("Location:lista_precios.php");
  }
  ?>
<form method="post" name="update" action="<?php echo $_SERVER['../../Food Trucks/CRUD la_paseandera/precios/PHP_SELF'];?>">
<table align="center" border="2" bgcolor="#00FF00">

<tr>
<td>id</td>
<td><label for="id"></label>
<td><input name="id" type= "hidden=" value="<?php echo $id ?>"/></td>
</tr>
<tr>
<td>fecha</td>
<td><label for="fecha"></label></td>
<td><input name="fecha" id="fecha" type="text" value="<?php echo $fecha ?>"/></td>
</tr>
<tr>
<td>producto</td>
<td><label for="producto"></label></td>
<td><input name="producto" id="producto" type="text" value="<?php echo $producto?>" /></td>
</tr>
<tr>
<td>precio</td>
<td><label for="precio"></label></td>
<td><input name="precio" id="precio" type="text" value="<?php echo $precio?>" /></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar" /></td>
</tr>
</table>
</form>


</body>
</html>