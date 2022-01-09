<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Array fasilitos</title>
</head>

<body>
<?php
// array predefinidos
$Elementos = array("elemento1" . "<br>", 2 . "<br>", "elemento3" . "<br>");
echo $Elementos[2];


//array asociativos o personalizados
$Asociativo = array("clave1" => "elemento1" . "<br>" , "clave2" => 2 . "<br>");

echo $Asociativo["clave2"];

$Paises = array("clave 0"=>"Argentina" . "<br>", "clave 1"=>"Brazil" . "<br>", "clave 2"=>"Bolivia" . "<br>", "clave 3"=>"Colombia" . "<br>", "clave 4"=>"Chile" . "<br>","clave 5"=>"Ecuador" . "<br>"); 

?>
<form>
<table border="3">
<tr>
<td><?php echo $Paises["clave 0"];?></td>
</tr>
<tr>
<td><?php echo $Paises["clave 1"];?></td>
</tr>
<tr>
<td><?php echo $Paises["clave 2"];?></td>
</tr>
<tr>
<td><?php echo $Paises["clave 3"];?></td>
</tr>
<tr>
<td><?php echo $Paises["clave 4"];?></td>
</tr>
<tr>
<td><?php echo $Paises["clave 5"];?></td>
</tr>
</table>
</form>
</body>
</html>