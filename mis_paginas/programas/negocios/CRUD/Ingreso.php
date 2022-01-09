<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD</title>
</head>

<body>
<?php


include("coneccion.php");

/*$coneccion=$base->query("select * from productos");
$registro=$coneccion->fetchAll(PDO::FETCH_OBJ);*/

$registro=$base->query("SELECT * FROM PRODUCTOS")->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST["cr"])){
  $fecha=$_POST["fecha"];
  $nombre=$_POST["nombre"];
  $precio=$_POST["precio"];  
  $kg=$_POST["kg"];
  $cantidad=$_POST["cantidad"];
  
  $sql="INSERT INTO PRODUCTOS (fecha, nombre, precio, kg, cantidad)VALUE(:miFech, :miNom, :miPre, :miKg, :miCant)";
	  
	  $resultado=$base->prepare($sql);
	  $resultado->execute(array(":miFech"=>$fecha, ":miNom"=>$nombre, ":miPre"=>$precio, ":miKg"=>$kg, ":miCant"=>$cantidad));
	  header("Location:index.php");
  }

?>

<h1 align="center">CRUD <span class="subtitulo">Create Read Update Delete</span></h1>
<h2 align="center">LA PASEANDERA PATAGONICA</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<table width="50" border="1" align="center" bgcolor="#00FF33">
<tr>
	<td class="primera fila">ID</td>
	<td class="primera fila">FECHA</td>
    <td class="primera fila">PRODUCTO</td>
    <td class="primera fila">PRECIO</td>
    <td class="primera fila">KG</td>
    <td class="primera fila">CANTIDAD</td></tr>
<?php
 foreach($registro as $Datos):?> 
<tr>    
	<td><?php echo $Datos->ID?></td>
	<td><?php echo $Datos->FECHA?></td>
    <td><?php echo $Datos->NOMBRE?></td>
    <td><?php echo $Datos->PRECIO?></td>
    <td><?php echo $Datos->KG?></td>
    <td><?php echo $Datos->CANTIDAD?></td>
    
    <td class="bot"><a href="borrar_registro.php?id=<?php echo $Datos->ID ?>"><input type="button" name="del" value="Borrar"></a></td>
     <td class="bot"><a href="actualizar_registro.php?id=<?php echo $Datos->ID ?> &amp; fecha=<?php echo $Datos->FECHA?> &amp; nombre=<?php echo $Datos->NOMBRE?> &amp; precio=<?php echo $Datos->PRECIO?> &amp; kg=<?php echo $Datos->KG?> &amp; cantidad=<?php echo $Datos->CANTIDAD?>"><input type="button" name="up" value="Actualizar"></a></td></tr>
     
     <?php
	 endforeach;
	 ?>
     
     
     <tr>
     <td></td>
      <td><input type="text" name="fecha" size="10" class="centrado"></td> 
      <td><input type="text" name="nombre" size="10" class="centrado"></td>  
      <td><input type="text" name="precio" size="10" class="centrado"></td> 
      <td><input type="text" name="kg" size="10" class="centrado"></td> 
      <td><input type="text" name="cantidad" size="10" class="centrado"></td> 
      <td class="bot"><a href="crear_registro.php"><input type="submit"  name="cr" id="cr" value="Ingreso"></a></td></tr>
      </table>
      </form>
</body>
</html>