<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Actualizar registro RESTAURANTE</title>
</head>

<body> 

<h1 align="center">Actualizar RESTAURANTE</h1>
<p>
  <?php
  include("coneccion.php");
  
  if(!isset($_POST["bot_actualizar"])){
  
	$orden=$_GET["Orden"];
	$fecha=$_GET["Fecha"];
	$mesa=$_GET["Mesa"];
	$mozo=$_GET["Mozo"];
	$tipo=$_GET["Tipo"];
	$producto=$_GET["Producto"];
	$categoria=$_GET["Categoria"];
	$precio=$_GET["Precio"];
	$publico=$_GET["publico"];
	
  }else{
	  
	$orden=$_POST["Orden"];
	$fecha=$_POST["Fecha"];
	$mesa=$_POST["Mesa"];
	$mozo=$_POST["Mozo"];
	$tipo=$_POST["Tipo"];
	$producto=$_POST["Producto"];
	$categoria=$_POST["Categoria"];
	$precio=$_POST["Precio"];
	$publico=$_POST["publico"];
	  
	  $sql="UPDATE DATOS SET Orden=:miOrden, Fecha=:miFech, Mesa=:miMesa, Mozo=:miMozo, Tipo=:miTipo, Producto=:miProd, Categoria=:miCat, Precio=:miPrec, publico=:miPub WHERE Orden=:miOrden";
	  
	  $resultado=$base->prepare($sql);
	  $resultado->execute(array(":miOrden"=>$orden, ":miFech"=>$fecha, ":miMesa"=>$mesa, ":miMozo"=>$mozo, ":miTipo"=>$tipo, ":miProd"=>$producto, ":miCat"=>$categoria, ":miPrec"=>$precio, ":miPub"=>$publico));
	  
	  header("Location:INDEX_RESTAURANTE.php");
	 
  }
?>
 <p> 
  
  
</p>
<p>&nbsp;</p>
<form name="update" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<table width="25%" border="2" align="center">
    <tr>
    <td>Orden</td>
    <td><label for="Orden"></label>
    <input type="text" name="Orden" id="Orden" value="<?php echo $orden ?>"></td>
    </tr>
    <tr>
    <td>Fecha</td>
    <td><label for="Fecha"></label>
    <input type="text" name="Fecha" id="Fecha" value="<?php echo $fecha?>"></td>
    </tr>
    <tr>
    <td>Mesa</td>
    <td><label for="Mesa"></label>
    <input type="text" name="Mesa" id="Mesa" value="<?php echo $mesa?>"></td>
    </tr>
    <tr>
    <td>Mozo</td>
    <td><label for="Mozo"></label>
    <input type="text" name="Mozo" id="Mozo" value="<?php echo $mozo?>"></td>
    </tr>
     <tr>
    <td>Tipo</td>
    <td><label for="Tipo"></label>
    <input type="text" name="Tipo" id="Tipo" value="<?php echo $tipo?>"></td>
    </tr>
    <tr>
    <td>Producto</td>
    <td><label for="Producto"></label>
    <input type="text" name="Producto" id="Producto" value="<?php echo $producto?>"></td>
    </tr>
    <tr>
    <td>Categoria</td>
    <td><label for="Categoria"></label>
    <input type="text" name="Categoria" id="Categoria" value="<?php echo $categoria?>"></td>
    </tr>
     <tr>
    <td>Precio</td>
    <td><label for="Precio"></label>
    <input type="text" name="Precio" id="Precio" value="<?php echo $precio?>"></td>
    </tr>
    <tr>
    <td>publico</td>
    <td><label for="publico"></label>
    <input type="text" name="publico" id="publico" value="<?php echo $publico?>"></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar" /></td>
    </tr>
    </table>
    </form>
</body>
</html>