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

if(isset($_POST["ingresar"])){
$id=$_POST["id"];
$fecha=$_POST["fecha"];
$producto=$_POST["producto"];
$precio=$_POST["precio"];

$sql="INSERT INTO PRECIOS (fecha, producto, precio) VALUE(:FECHA, :PRODUCTO, :PRECIO)";

$RESULTADO=$base->prepare($sql);
$RESULTADO->execute(array(":ID"=>$id, ":FECHA"=>$fecha, ":PRODUCTO"=>$producto, ":PRECIO"=>$precio));

header("Location=lista_precios.php");

}


?>
<h1 align="center"> Lista de Precios</h1>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
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
<td><?php echo $Datos->id?></td>
<td><?php echo $Datos->fecha?></td>
<td><?php echo $Datos->producto?></td>
<td><?php echo $Datos->precio?></td>


<td class="bot"><a href="borrado.php?id=<?php echo $Datos->id?>"><input type="button" name="del" value="borrar"></a>
<td class="bot_actualizar"><a href="actualizar.php?id=<?php echo $Datos->id?>
&amp; fecha=<?php echo $Datos->fecha?>
&amp; producto=<?php echo $Datos->producto?>
&amp; precio=<?php echo $Datos->precio?>">

<input type="button" name="bot_actualizar" value="Actualizar"></a>


</tr>
<?php
endforeach;
?>
<tr>
<td></td>
<td><input type="text" name="fecha" size="10" class="centrado" /></td>
<td><input type="text" name="producto" size="10" class="centrado" /></td>
<td><input type="text" name="precio" size="10" class="centrado" /></td>
<td class="bot"><input type="submit" name="ingresar" value="ingresar" />
</table>
</form>
</body>
</html>