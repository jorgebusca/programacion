<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Actualizar registro LA PASEANDERA</title>
</head>

<body> 

<h1 align="center">Actualizar Registros</h1>
<p>
  <?php
  include("coneccion.php");
  
  if(!isset($_POST["bot_actualizar"])){
  $id=$_GET["id"];
  $fecha=$_GET["fecha"];
  $hamburguesa=$_GET["hamburguesa"];
  $lomo=$_GET["lomo"];  
  $chorizo=$_GET["chorizo"];
  $cono_fritas=$_GET["cono_fritas"];
  $milanesa=$_GET["milanesa"];
  $pizza=$_GET["pizza"];
  $agua_chica=$_GET["agua_chica"];    
  $agua_grande=$_GET["agua_grande"];
  $cerveza_lata=$_GET["cerveza_lata"];
  $cerveza_litro=$_GET["cerveza_litro"];
  }else{
	
$id=$_POST["id"];
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

$sql="UPDATE VENTAS SET fecha=:FECHA, hamburguesa=:HAMB, lomo=:LOMO, chorizo=:CHORY, cono_fritas=:C_FRITAS, milanesa=:MILA, pizza=:PIZZA, agua_chica=:A_CHICA, agua_grande=:A_GRANDE, cerveza_lata=:C_LATA, cerveza_litro=:C_LITRO WHERE id=:ID,";

$resultado=$base->prepare($sql);
$resultado->execute(array(":FECHA"=>$fecha, ":HAMB"=>$hamburguesa, ":LOMO"=>$lomo, ":CHORY"=>$chorizo, ":C_FRITAS"=>$cono_fritas, ":MILA"=>$milanesa, ":PIZZA"=>$pizza, ":A_CHICA"=>$agua_chica, ":A_GRANDE"=>$agua_grande, ":C_LATA"=>$cerveza_lata, ":C_LITRO"=>$cerveza_litro));

header("Location:ventas.php");


}

?>
<p>
</p>
<p>&nbsp;</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" name="bot_actualizar">
<table border="2" align="center" bgcolor="#00CCCC">
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
    <td>hamburguesa</td>
    <td><label for="hamburguesa"></label>
    <input type="text" name="hamburguesa" id="hamburguesa" value="<?php echo $hamburguesa?>"></td>
    </tr>
    <tr>
    <td>lomo</td>
    <td><label for="lomo"></label>
    <input type="text" name="lomo" id="lomo" value="<?php echo $lomo?>"></td>
    </tr>
    <tr>
    <td>chorizo</td>
    <td><label for="chorizo"></label>
    <input type="text" name="chorizo" id="chorizo" value="<?php echo $chorizo?>"></td>
    </tr>
    <tr>
    <td>cono_fritas</td>
    <td><label for="cono_fritas"></label>
    <input type="text" name="cono_fritas" id="cono_fritas" value="<?php echo $cono_fritas?>"></td>
    </tr>
    <tr>
    <td>milanesa</td>
    <td><label for="milanesa"></label>
    <input type="text" name="milanesa" id="milanesa" value="<?php echo $milanesa?>"></td>
    </tr>
    <tr>
    <td>pizza</td>
    <td><label for="pizza"></label>
    <input type="text" name="pizza" id="pizza" value="<?php echo $pizza?>"></td>
    </tr>
     <tr>
    <td>agua_chica</td>
    <td><label for="agua_chica"></label>
    <input type="text" name="agua_chica" id="agua_chica" value="<?php echo $agua_chica?>"></td>
    </tr>
     <tr>
    <td>agua_grande</td>
    <td><label for="agua_grande"></label>
    <input type="text" name="agua_grande" id="agua_grande" value="<?php echo $agua_grande?>"></td>
    </tr>
     <tr>
    <td>cerveza_lata</td>
    <td><label for="cerveza_lata"></label>
    <input type="text" name="cerveza_lata" id="cerveza_lata" value="<?php echo $cerveza_lata?>"></td>
    </tr>
     <tr>
    <td>cerveza_litro</td>
    <td><label for="cerveza_litro"></label>
    <input type="text" name="cerveza_litro" id="cerveza_litro" value="<?php echo $cerveza_litro?>"></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar" /></td>
    </tr>
    </table>
    </form>
</body>
</html>