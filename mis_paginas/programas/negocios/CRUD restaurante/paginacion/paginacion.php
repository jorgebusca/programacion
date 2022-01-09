<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PAGINACION</title>
</head>

<body>
<?php 
include("coneccion.php");

//$coneccion=$base->query("select * from productos");
//$registro=$coneccion->fetchAll(PDO::FETCH_OBJ);

//-------------------------------------------paginacion-------------------------------------------------------



	 $TAMAÑO_PAGINAS=20;
	 
	 if(isset($_GET["pagina"])){
		 if($_GET["pagina"]==1){
			 
			 header("Location:paginacion.php");
	 }else{
		 
		$PAGINA=$_GET["pagina"];
	 }
	 }else{
	 
	 $PAGINA=1;
	 }
	 $empezar_desde=($PAGINA-1)*$TAMAÑO_PAGINAS;
	 
	 
	$sql_total="SELECT * FROM DATOS";
	$resultado=$base->prepare($sql_total);
	$resultado->execute(array());
	
	$num_filas=$resultado->rowCount();
	$total_paginas=ceil($num_filas/$TAMAÑO_PAGINAS);

//--------------------------------------------------------------------------------------------------



$registro=$base->query("SELECT * FROM DATOS LIMIT $empezar_desde,$TAMAÑO_PAGINAS")->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST["cr"])){
	$fecha=$_POST["fecha"];
	$mesa=$_POST["mesa"];
	$mozo=$_POST["mozo"];
	$tipo=$_POST["tipo"];
	$producto=$_POST["producto"];
	$categoria=$POST["categoria"];
	$precio=$_POST["precio"];
	$publico=$_POST["publico"];
	
	$sql="INSERT INTO DATOS (Fecha, Mesa, Mozo, Tipo, Producto, Categoria, Precio, publico) VALUE (:fecha, :mesa, :mozo, :tipo, :producto, :categoria, :precio, :publico)"; //ACA A LOS REGISTROS DE LA TABLA LE ASIGNO MARCADORES
	
	$resultado=$base->prepare($sql);
	$resultado->execute(array(":fecha"=>$fecha, ":mesa"=>$mesa, ":mozo"=>$mozo, ":tipo"=>$tipo, ":producto"=>$producto, ":categoria"=>$categoria, ":precio"=>$precio, ":publico"=>$publico));//ACA ASIGNO LOS DATOS QUE ESTAN EN LAS VARIABLES DEL POST A LOS MARCADORES 
	
	//ESTE FORMULARIO FUNCIONO BIEN DE ECHO INGRESE VALORES A LA BASE DE DATOS PERO ALGO BORRE O FALTA PORQUE HICE DE NUEVO DESDE EL POST HASTA EL ARRAY Y NO FUNCIONA 
	
	header("Location:paginacion.php");
	
}


?>
<p>

<h1 align="center">CRUD <span class="subtitulo">Create Read Update Delete</span></h1>
<h2 align="center">PAGINACION </h2>
<form action="<?php echo $_SERVER['../../CRUD/paginacion/PHP_SELF'];?>" method="post">
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
    
    <td class="bot"><a href="borrado_registro.php?Orden=<?php echo $Datos->Orden?>"><input type="button" name="del" value="Borrar"></a>
    
     <td class="bot"><a href="Actualizar_Datos.php?orden=<?php echo $Datos->Orden?> 
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
      
<?php

//--------------------------------paginacion----------------------------------------------------------

for($i=1; $i<=$total_paginas; $i++){
	
echo "<a href='?pagina= " . $i . "'> " . $i . "</a>  ";



}



?>

</body>
</html>