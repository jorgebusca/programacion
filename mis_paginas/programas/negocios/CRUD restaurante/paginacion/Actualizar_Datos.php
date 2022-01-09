<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Actualizar registro LA PASEANDERA</title>
</head>

<body> 

<h1 align="center">Actualizar Registros Ventas</h1>
<p>
  <?php
  include("coneccion.php");
  
  if(!isset($_POST["bot_actualizar"])){
  $orden=$_GET["orden"];
   $fecha=$_GET["fecha"];
	$mesa=$_GET["mesa"];
	$mozo=$_GET["mozo"];
	$tipo=$_GET["tipo"];
	$producto=$_GET["producto"];
	$categoria=$_GET["categoria"];
	$precio=$_GET["precio"];
	$publico=$_GET["publico"];
	
  }else{
	
   $orden=$_POST["orden"];
   $fecha=$_POST["fecha"];
	$mesa=$_POST["mesa"];
	$mozo=$_POST["mozo"];
	$tipo=$_POST["tipo"];
	$producto=$_POST["producto"];
	$categoria=$POST["categoria"];
	$precio=$_POST["precio"];
	$publico=$_POST["publico"];
	
	
$sql="UPDATE DATOS SET Orden=:miOrden, Fecha=:miFech, Mesa=:miMesa, Mozo=:miMozo, Tipo=:miTipo, Producto=:miProd, categoria=:miCat, Precio=:miPrecio, publico=:miPub WHERE Orden=:miOrden";

 $resultado=$base->prepare($sql);
	  $resultado->execute(array(":miOrden"=>$orden, ":miFech"=>$fecha, ":miMesa"=>$mesa, ":miMozo"=>$mozo, ":miTipo"=>$tipo, ":miProd"=>$producto, ":miCat"=>$categoria, ":miPrecio"=>$precio, ":miPub"=>$publico));
	  
header("Location:paginacion.php");
}
?>
<p>
</p>
<p>&nbsp;</p>

<form name="update" method="post" action="<?php echo $_SERVER['../../Food Trucks/CRUD la_paseandera/paginacion/PHP_SELF'];?>"  >
<table  width="25%" border="2" align="center" bgcolor="#00CCCC">
    <tr>
    <td>ORDEN</td>
    <td><label for="orden"></label>
    <input type="hidden" name="orden" id="orden" value="<?php echo $orden ?>" /></td>
    </tr>
    <tr>
    <td>FECHA</td>
    <td><label for="fecha"></label>
    <input type="text" name="fecha" id="fecha" value="<?php echo $fecha?>" /></td>
    </tr>
    <tr>
    <td>MESA</td>
    <td><label for="mesa"></label>
    <input type="text" name="mesa" id="mesa" value="<?php echo $mesa?>" /></td>
    </tr>
    <tr>
    <td>MOZO</td>
    <td><label for="mozo"></label>
    <input type="text" name="mozo" id="mozo" value="<?php echo $mozo?>" /></td>
    </tr>
    <tr>
    <td>TIPO</td>
    <td><label for="tipo"></label>
    <input type="text" name="tipo" id="tipo" value="<?php echo $tipo?>" /></td>
    </tr>
    <tr>
    <td>PRODUCTO</td>
    <td><label for="producto"></label>
    <input type="text" name="producto" id="producto" value="<?php echo $producto?>" /></td>
    </tr>
    <tr>
    <td>CATEGORIA</td>
    <td><label for="categoria"></label>
    <input type="text" name="categoria" id="categoria" value="<?php echo $categoria?>" /></td>
    </tr>
    <tr>
    <td>PRECIO</td>
    <td><label for="precio"></label>
    <input type="text" name="precio" id="precio" value="<?php echo $precio?>" /></td>
    </tr>
     <tr>
    <td>PUBLICO</td>
    <td><label for="publico"></label>
    <input type="text" name="publico" id="publico" value="<?php echo $publico?>" /></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar" /></td>
    </tr>
    </table>
    </form>
</body>
</html>