<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Restaurante Vista</title>
<style>
	td{border:1px dotted #FF0000;
	
	}

</style>
</head>

<body>
<table align="center" bgcolor="#00CCFF">

<tr><td>RESTAURANTE</td></tr>

<tr>

<p>

<h1 align="center">CRUD <span class="subtitulo">Create Read Update Delete</span></h1>
<h2 align="center">PAGINACION </h2>
<form action="<?php echo $_SERVER['../../../Food Trucks/CRUD/paginacion/MVC/Vista/PHP_SELF'];?>" method="post">
<table width="25%" border="1" align="center" bgcolor="#33FF99">
<tr>
	<td class="primera fila">ORDEN</td>
	<td class="primera fila">FECHA</td>
    <td class="primera fila">MESA</td>
    <td class="primera fila">MOZO</td>
    <td class="primera fila">TIPO</td>
    <td class="primera fila">PRODUCTO</td> 
    <td class="primera fila">CATEGORIA</td>
    <td class="primera fila">PRECIO</td>
    <td class="primera fila">PUBLICO</td>
 </tr>
<?php 
foreach($matrizProductos as $Datos):?> 
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
    
    <td class="bot"><a href="../../../Food Trucks/CRUD/paginacion/MVC/Vista/borrado_registro.php?Orden=<?php echo $Datos->Orden?>"><input type="button" name="del" value="Borrar"></a>
    
     <td class="bot"><a href="../../../Food Trucks/CRUD/paginacion/MVC/Vista/Actualizar_Datos.php?orden=<?php echo $Datos->Orden?> 
     &amp; fecha=<?php echo $Datos->Fecha?> 
     &amp; mesa=<?php echo $Datos->Mesa?> 
     &amp; mozo=<?php echo $Datos->Mozo?>
     &amp; tipo=<?php echo $Datos->Tipo?>
     &amp; producto=<?php echo $Datos->Producto?>
     &amp; categoria=<?php echo $Datos->Categoria?>
     &amp; precio=<?php echo $Datos->Precio?>
     &amp; publico=<?php echo $Datos->publico?>">
     
     <input type="button" name="actualizar" value="Actualizar"></a></td>
     </tr>
     
     <?php
 endforeach;
	 ?>
     
  	 <tr>
     <td></td>
      <td><input type="text" name="fecha" size="10" class="centrado"></td> 
      <td><input type="text" name="mesa" size="10" class="centrado"></td>  
      <td><input type="text" name="mozo" size="10" class="centrado"></td> 
      <td><input type="text" name="tipo" size="10" class="centrado"></td> 
      <td><input type="text" name="producto" size="10" class="centrado"></td> 
      <td><input type="text" name="categoria" size="10" class="centrado"></td> 
      <td><input type="text" name="precio" size="10" class="centrado"></td>
      <td><input type="text" name="publico" size="10" class="centrado"></td>
      
      <td class="bot"><input type="submit"  name="cr" id="cr" value="Ingreso"></td></tr>
      </table>
      </form>
</tr>
</table>
</body>
</html>