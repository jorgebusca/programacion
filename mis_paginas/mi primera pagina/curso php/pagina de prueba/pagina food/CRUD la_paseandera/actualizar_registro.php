<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Actualizar registro LA PASEANDERA</title>
</head>

<body> 

<h1 align="center">Actualizar</h1>
<p>
  <?php
  include("coneccion.php");
  
  if(!isset($_POST["bot_actualizar"])){
  $id=$_GET["id"];
  $fecha=$_GET["fecha"];
  $nombre=$_GET["nombre"];
  $precio=$_GET["precio"];  
  $kg=$_GET["kg"];
  $cantidad=$_GET["cantidad"];
  
  }else{
	  $id=$_POST["id"];
	  $fecha=$_POST["fecha"];
	  $nombre=$_POST["nombre"];
	  $precio=$_POST["precio"];
	  $kg=$_POST["kg"];
	  $cantidad=$_POST["cantidad"];
	  
	  $sql="UPDATE PRODUCTOS SET fecha=:miFech, nombre=:miNom, precio=:miPre, kg=:miKg, cantidad=:miCant WHERE id=:miId";
	  
	  $resultado=$base->prepare($sql);
	  $resultado->execute(array(":miId"=>$id, ":miFech"=>$fecha, ":miNom"=>$nombre, ":miPre"=>$precio, ":miKg"=>$kg, ":miCant"=>$cantidad));
	  header("Location:index.php");
  }
?>
 <p> 
  
  
</p>
<p>&nbsp;</p>
<form name="update" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<table width="25%" border="2" align="center">
    <tr>
    <td>id</td>
    <td><label for="id"></label>
    <input type="hidden" name="id" id="id" value="<?php echo $id ?>"></td>
    </tr>
    <tr>
    <td>fecha</td>
    <td><label for="fecha"></label>
    <input type="text" name="fecha" id="fecha" value="<?php echo $fecha?>"></td>
    </tr>
    <tr>
    <td>nombre</td>
    <td><label for="nombre"></label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $nombre?>"></td>
    </tr>
    <tr>
    <td>precio</td>
    <td><label for="precio"></label>
    <input type="text" name="precio" id="precio" value="<?php echo $precio?>"></td>
    </tr>
    <tr>
    <td>kg</td>
    <td><label for="kg"></label>
    <input type="text" name="kg" id="kg" value="<?php echo $kg?>"></td>
    </tr>
    <tr>
    <td>cantidad</td>
    <td><label for="cantidad"></label>
    <input type="text" name="cantidad" id="cantidad" value="<?php echo $cantidad?>"></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar" /></td>
    </tr>
    </table>
    </form>
</body>
</html>