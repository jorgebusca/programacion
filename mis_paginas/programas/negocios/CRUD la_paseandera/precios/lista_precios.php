<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingreso Precios</title>
</head>

<body>
<?php 

include("coneccion.php");

$registro=$base->query("SELECT * FROM PRECIOS")->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST["cr"])){
$fecha=$_POST["FECHA"];
$producto=$_POST["producto"];
$precio=$_POST["precio"];

$sql="INSERT INTO PRECIOS (fecha, producto, precio) VALUE(:FECHA, :PRODUCTO, :PRECIO)";

$RESULTADO=$base->prepare($sql);
$RESULTADO->execute(array(":FECHA"=>$fecha, ":PRODUCTO"=>$producto, ":PRECIO"=>$precio));

header("Location:lista_precios.php");

}
?>
<h1 align="center"> Lista de Precios</h1>

<form action="<?php echo $_SERVER['Food Trucks/CRUD la_paseandera/precios/PHP_SELF']?>" method="post">
<table width="50%" align="center" border="2" bgcolor="#FF3300">
<tr>
<td class="primera fila">ID</td>
<td class="primera fila">FECHA</td>
<td class="primera fila">PRODUCTO</td>
<td class="primera fila">PRECIO</td>
</tr>
<?php
foreach ($registro as $Datos):?>
<tr>
<td><?php echo $Datos->ID?></td>
<td><?php echo $Datos->FECHA?></td>
<td><?php echo $Datos->PRODUCTO?></td>
<td><?php echo $Datos->PRECIO?></td>


<td class="bot"><a href="borrado.php?id=<?php echo $Datos->ID?>"><input type="button" name="del" value="borrar"></a>
<td class="bot_actualizar"><a href="actualizar_registro_precio.php?id=<?php echo $Datos->ID?>
&amp; fecha=<?php echo $Datos->FECHA?>
&amp; producto=<?php echo $Datos->PRODUCTO?>
&amp; precio=<?php echo $Datos->PRECIO?>">

<input type="button" name="bot_actualizar" value="Actualizar"></a>


</tr>
<?php
endforeach;
?>
<tr>
<td></td>
<td><input type="text" name="fecha" class="centrado" /></td>
<td><input type="text" name="producto" class="centrado" /></td>
<td><input type="text" name="precio" class="centrado" /></td>
<td class="bot"><a href="crear_registro.php"><input type="submit"  name="cr" id="cr" value="Ingreso"></a></td></tr>
</table>
</form>
</body>
</html>