<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD RESTAURANTE</title>
</head>

<body>
<?php


include("coneccion.php");

/*$coneccion=$base->query("select * from productos");
$registro=$coneccion->fetchAll(PDO::FETCH_OBJ);*/

$registro=$base->query("SELECT * FROM DATOS")->fetchAll(PDO::FETCH_OBJ);


if(isset($_POST["cr"])){
	$orden=$_POST["Orden"];
	$fecha=$_POST["Fecha"];
	$mesa=$_POST["Mesa"];
	$mozo=$_POST["Mozo"];
	$tipo=$_POST["Tipo"];
	$producto=$_POST["Producto"];
	$categoria=$_POST["Categoria"];
	$precio=$_POST["Precio"];
	$publico=$_POST["publico"];
  
  $sql="INSERT INTO DATOS (Orden, Fecha, Mesa, Mozo, Tipo, Poducto, Categoria, Precio, publico)VALUE(:miOrden, :miFech, :miMesa, :miMozo, :miTipo, :miProd, :miCat, :miPrec, :miPub)";
	  
	  $resultado=$base->prepare($sql);
	  $resultado->execute(array(":miOrden"=>$orden,":miFech"=>$fecha, ":miMesa"=>$mesa, ":miMozo"=>$mozo, ":miTipo"=>$tipo, ":miProd"=>$producto, ":miCat"=>$categoria, ":miPrec"=>$precio, ":miPub"=>$publico));
	  header("Location:INDEX_RESTAURANTE.php");
  }

?>

<h1 align="center">CRUD <span class="subtitulo">Create Read Update Delete</span></h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<table width="50" border="1" align="center">
<tr>
	<td class="primera fila">Orden</td>
	<td class="primera fila">Fecha</td>
    <td class="primera fila">Mesa</td>
    <td class="primera fila">Mozo</td>
    <td class="primera fila">Tipo</td>
    <td class="primera fila">Producto</td>
    <td class="primera fila">Categoria</td>
    <td class="primera fila">Precio</td>
    <td class="primera fila">publico</td></tr>
<?php
 foreach($registro as $Datos):?> 
<tr>    
	<td><?php echo $Datos->Orden?></td>
	<td><?php echo $Datos->Fecha?></td>
    <td><?php echo $Datos->Mesa?></td>
    <td><?php echo $Datos->Mozo?></td>
    <td><?php echo $Datos->Tipo?></td>
    <td><?php echo $Datos->Producto?></td>
    <td><?php echo $Datos->Categoria?></td>
    <td><?php echo $Datos->Precio?></td>
    <td><?php echo $Datos->publico?></td>    
    <td class="bot"><a href="borrar_registro.php?Orden=<?php echo $Datos->Orden ?>">
    <input type="button" name="del" value="Borrar"></a></td>
    
     <td class="bot"><a href="actualizar_registro_RESTAURANTE.php?Orden=<?php echo $Datos->Orden?>
     & Fecha=<?php echo $Datos->Fecha?>
     & Mesa=<?php echo $Datos->Mesa?>
     & Mozo=<?php echo $Datos->Mozo?>
     & Tipo=<?php echo $Datos->Tipo?>
     & Producto=<?php echo $Datos->Producto?>
     & Categoria=<?php echo $Datos->Categoria?>
     & Precio=<?php echo $Datos->Precio?>
     & publico=<?php echo $Datos->publico?>">
     <input type="button" name="up" id="up" value="Actualizar"></a></td></tr>
     
     <?php
	 endforeach;
	 ?>
     
     
     <tr>
     <td></td>
      <td><input type="text" name="Orden" size="10" class="centrado"></td> 
      <td><input type="text" name="Fecha" size="10" class="centrado"></td>  
      <td><input type="text" name="Mesa" size="10" class="centrado"></td> 
      <td><input type="text" name="Mozo" size="10" class="centrado"></td> 
      <td><input type="text" name="Tipo" size="10" class="centrado"></td> 
      <td><input type="text" name="Producto" size="10" class="centrado"></td> 
      <td><input type="text" name="Categoria" size="10" class="centrado"></td> 
      <td><input type="text" name="Precio" size="10" class="centrado"></td> 
      <td><input type="text" name="publico" size="10" class="centrado"></td> 
      <td class="bot"><a href="crear_registro.php"><input type="submit"  name="cr" id="cr" value="Ingreso"></a></td></tr>
      </table>
      </form>
</body>
</html>