<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ingreso de datos de ventas</title>

</head>

<body>
<?php 
include("coneccion.php");

//$coneccion=$base->query("select * from productos");
//$registro=$coneccion->fetchAll(PDO::FETCH_OBJ);

$registro=$base->query("SELECT * FROM VENTAS")->fetchAll(PDO::FETCH_OBJ);


if(isset($_POST["cr"])){
  $fecha=$_POST["fecha"];
  $hamburguesa=$_POST["hamburguesa"];
  $lomo=$_POST["lomo"];  
  $chorizo=$_POST["chorizo"];
  $cono_fritas=$_POST["cono_fritas"];
  $milanesa=$_POST["milanesa"];
  $pizza=$_POST["pizza"];
  $agua_chica=$_POST["agua_chica"];
  $agua_grande=$_POST["agua_grande"];
  $cerveza_lata=$_POST["cerveza_lata"];
  $cerveza_litro=$_POST["cerveza_litro"];
 
  
  
  $sql="INSERT INTO VENTAS (fecha, hamburguesa, lomo, chorizo, cono_fritas, milanesa, pizza, agua_chica, agua_grande, cerveza_lata, cerveza_litro)VALUE(:miFech, :miHamb, :miLomo, :miChori, :miCono, :miMila, :miPizza, :A_chica, :A_grande, :Cerv_Lata, :Cerv_Litro)";
	  
	  $resultado=$base->prepare($sql);
	  $resultado->execute(array(":miFech"=>$fecha, ":miHamb"=>$hamburguesa, ":miLomo"=>$lomo, ":miChori"=>$chorizo, ":miCono"=>$cono_fritas, ":miMila"=>$milanesa, ":miPizza"=>$pizza, ":A_chica"=>$agua_chica, ":A_grande"=>$agua_grande, ":Cerv_Lata"=>$cerveza_lata, "Cerv_Litro"=>$cerveza_litro));
	  
	  
	  header("Location:ventas.php");
 }
?>
<p>

<h1 align="center">CRUD <span class="subtitulo">Create Read Update Delete</span></h1>
<h2 align="center">ventas del food truck</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<table width="25%" border="1" align="center" bgcolor="#339900">
<tr>
	<td class="primera fila">id</td>
	<td class="primera fila">fecha</td>
    <td class="primera fila">hamburguesa</td>
    <td class="primera fila">lomo</td>
    <td class="primera fila">chorizo</td>
    <td class="primera fila">cono_fritas</td> 
    <td class="primera fila">milanesa</td>
    <td class="primera fila">pizza</td>
    <td class="primera fila">agua_chica</td>
    <td class="primera fila">agua_grande</td>
    <td class="primera fila">cerveza_lata</td>
    <td class="primera fila">cerveza_litro</td>
</tr>
<?php 
foreach($registro as $Datos):?> 
<tr>    
	<td><?php echo $Datos->id?></td>
	<td><?php echo $Datos->fecha?></td>
    <td><?php echo $Datos->hamburguesa?></td>
    <td><?php echo $Datos->lomo?></td>
    <td><?php echo $Datos->chorizo?></td>
    <td><?php echo $Datos->cono_fritas?></td>
    <td><?php echo $Datos->milanesa?></td>
    <td><?php echo $Datos->pizza?></td>
    <td><?php echo $Datos->agua_chica?></td>
    <td><?php echo $Datos->agua_grande?></td>
    <td><?php echo $Datos->cerveza_lata?></td>
    <td><?php echo $Datos->cerveza_litro?></td>
    
    <td class="bot"><a href="borrado_registro.php?id=<?php echo $Datos->id?>"><input type="button" name="del" value="Borrar"></a>
     <td class="bot"><a href="editar.php?id=<?php echo $Datos->id?> &amp; fecha=<?php echo $Datos->fecha?> &amp; hamburguesa=<?php echo $Datos->hamburguesa?> &amp; lomo=<?php echo $Datos->lomo?>&amp; chorizo=<?php echo $Datos->chorizo?>&amp; cono_fritas=<?php echo $Datos->cono_fritas?>&amp; milanesa=<?php echo $Datos->milanesa?>&amp; pizza=<?php echo $Datos->pizza?>&amp; agua_chica=<?php echo $Datos->agua_chica?>&amp; agua_grande=<?php echo $Datos->agua_grande ?>&amp; cerveza_lata=<?php echo $Datos->cerveza_lata?>&amp; cerveza_litro=<?php echo $Datos->cerveza_litro?>"><input type="button" name="actualizar" value="Actualizar"></a></td>
     </tr>
     
     <?php
 endforeach;
	 ?>
     
   <tr>
     <td></td>
      <td><input type="text" name="fecha" size="10" class="centrado"></td> 
      <td><input type="text" name="hamburguesa" size="10" class="centrado"></td>  
      <td><input type="text" name="lomo" size="10" class="centrado"></td> 
      <td><input type="text" name="chorizo" size="10" class="centrado"></td> 
      <td><input type="text" name="cono_fritas" size="10" class="centrado"></td> 
      <td><input type="text" name="milanesa" size="10" class="centrado"></td> 
      <td><input type="text" name="pizza" size="10" class="centrado"></td>
      <td><input type="text" name="agua_chica" size="10" class="centrado"></td>
      <td><input type="text" name="agua_grande" size="10" class="centrado"></td>
      <td><input type="text" name="cerveza_lata" size="10" class="centrado"></td>
      <td><input type="text" name="cerveza_litro" size="10" class="centrado"></td>
      
      <td class="bot"><input type="submit"  name="cr" id="cr" value="Ingreso"></td></tr>
      </table>
      </form>
</body> 
</html>