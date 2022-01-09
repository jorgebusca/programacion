<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Total Ventas LA PASEANDERA</title>
</head>

<body> 

<h1 align="center">Total de Ventas</h1>
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

$sql="UPDATE VENTAS SET Id=:miId, Fecha=:miFech, Hamburguesa=:miHamb, Lomo=:miLomo, Chorizo=:miChori, Cono_Fritas=:miCono, Milanesa=:miMila, Pizza=:miPizza, Agua_Chica=:A_chica, Agua_Grande=:A_grande, Cerveza_Lata=:Cerv_Lata, Cerveza_Litro=:Cerv_Litro WHERE Id=:miId";


 $resultado=$base->prepare($sql);
	  $resultado->execute(array(":miId"=>$id, ":miFech"=>$fecha, ":miHamb"=>$hamburguesa, ":miLomo"=>$lomo, ":miChori"=>$chorizo, ":miCono"=>$cono_fritas, ":miMila"=>$milanesa, ":miPizza"=>$pizza, ":A_chica"=>$agua_chica, ":A_grande"=>$agua_grande, ":Cerv_Lata"=>$cerveza_lata, "Cerv_Litro"=>$cerveza_litro));
	  
header("Location:ventas.php");

$numero=2;
$numero2=3;
$igual=$numero*$numero2;
echo $igual;

// $TOTALES=($hamburguesa1+$lomo1+$chorizo1+$cono_fritas1+$milanesa1+$pizza1+$agua_chica1+$agua_grande1+$cerveza_lata1+$cerveza_litro1);

}
?><p>
</p>

<form name="update" method="post" action="<?php echo $_SERVER['../../Food Trucks/CRUD la_paseandera/ventas/PHP_SELF'];?>"  >
<table  width="25%" border="2" align="center" bgcolor="#00CCCC">
    <tr>
    <td>ID</td>
    <td><label for="id"></label>
    <input type="hidden" name="id" id="id" value="<?php echo $id ?>" /></td>
    <input type="hidden" name="id" id="id" value="<?php echo $id ?>" /></td>
    </tr>
    <tr>
    <td>FECHA</td>
    <td><label for="fecha"></label>
    <input type="text" name="fecha" id="fecha" value="<?php echo $fecha?>" />
    <td><input type="text" name="valor" id="valor" value="<?php echo $fecha?>" />
    </td>
    </tr>
    <tr>
    <td>HAMBURGUESA</td>
    <td><label for="hamburguesa"></label>
    <input type="text" name="hamburguesa" id="hamburguesa" value="<?php echo $hamburguesa?>" /></td><td><label for="hamburguesa"></label>
    <input type="text" name="hamburguesa" id="hamburguesa" value="<?php echo $hamburguesa?>" /></td>
    </tr>
    <tr>
    <td>LOMO</td>
    <td><label for="lomo"></label>
    <input type="text" name="lomo" id="lomo" value="<?php echo $lomo?>" /></td>
    <td><label for="lomo"></label>
    <input type="text" name="lomo" id="lomo" value="<?php echo $lomo?>" /></td>
    </tr>
    <tr>
    <td>CHORIZO</td>
    <td><label for="chorizo"></label>
    <input type="text" name="chorizo" id="chorizo" value="<?php echo $chorizo?>" /></td>
    <td><label for="chorizo"></label>
    <input type="text" name="chorizo" id="chorizo" value="<?php echo $chorizo?>" /></td>
    </tr>
    <tr>
    <td>CONO_FRITAS</td>
    <td><label for="cono_fritas"></label>
    <input type="text" name="cono_fritas" id="cono_fritas" value="<?php echo $cono_fritas?>" /></td>
    <td><label for="cono_fritas"></label>
    <input type="text" name="cono_fritas" id="cono_fritas" value="<?php echo $cono_fritas?>" /></td>
    </tr>
    <tr>
    <td>MILANESA</td>
    <td><label for="milanesa"></label>
    <input type="text" name="milanesa" id="milanesa" value="<?php echo $milanesa?>" /></td>
    <td><label for="milanesa"></label>
    <input type="text" name="milanesa" id="milanesa" value="<?php echo $milanesa?>" /></td>
    </tr>
    <tr>
    <td>PIZZA</td>
    <td><label for="pizza"></label>
    <input type="text" name="pizza" id="pizza" value="<?php echo $pizza?>" /></td>
    <td><label for="pizza"></label>
    <input type="text" name="pizza" id="pizza" value="<?php echo $pizza?>" /></td>
    </tr>
     <tr>
    <td>AGUA_CHICA</td>
    <td><label for="agua_chica"></label>
    <input type="text" name="agua_chica" id="agua_chica" value="<?php echo $agua_chica?>" /></td>
    <td><label for="agua_chica"></label>
    <input type="text" name="agua_chica" id="agua_chica" value="<?php echo $agua_chica?>" /></td>
    </tr>
     <tr>
    <td>AGUA_GRANDE</td>
    <td><label for="agua_grande"></label>
    <input type="text" name="agua_grande" id="agua_grande" value="<?php echo $agua_grande?>" /></td>
     <td><label for="agua_grande"></label>
    <input type="text" name="agua_grande" id="agua_grande" value="<?php echo $agua_grande?>" /></td>
    </tr>
     <tr>
    <td>CERVEZA_LATA</td>
    <td><label for="cerveza_lata"></label>
    <input type="text" name="cerveza_lata" id="cerveza_lata" value="<?php echo $cerveza_lata?>" /></td>
    <td><label for="cerveza_lata"></label>
    <input type="text" name="cerveza_lata" id="cerveza_lata" value="<?php echo $cerveza_lata?>" /></td>
    </tr>
     <tr>
    <td>CERVEZA_LITRO</td>
    <td><label for="cerveza_litro"></label>
    <input type="text" name="cerveza_litro" id="cerveza_litro" value="<?php echo $cerveza_litro?>" /></td>
    <td><label for="cerveza_litro"></label>
    <input type="text" name="cerveza_litro" id="cerveza_litro" value="<?php echo $cerveza_litro?>" /></td>
    </tr>
    <tr>
    <td>VENTAS_TOTALES</td>
    <td><label for="VENTAS_TOTALES"></label>
    <input type="text" name="VENTAS_TOTALES" id="VENTAS_TOTALES" value="<?php echo $hamburguesa?>" /></td>
    </tr>
  </table>
    </form>
</body>
</html>