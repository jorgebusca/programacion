<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>usuario 1</title>
<style type="text/css">
.CENTRADO {
	text-align: center;
}
.USUARIO_1 {
	text-align: center;
}
.USUARIO_3 {
	text-align: center;
}
.USUARIO_2 {
	text-align: center;
}
.USUARIO_4 {
	text-align: center;
}
.USUARIO_2 .USUARIO_2 {
}
</style>
</head>

<body bgcolor="#0099CC">
<?php
		session_start();
		if (!isset($_SESSION["Usuario"])){
			
			header("Location:loguin.php");
			
		}

?>

<h1 align="center">Bienvenido Usuario

<?php

	echo "Hola: " . $_SESSION["Usuario"] . "<br><br>";

?>
</h1>

<p align="center">Esto es informacion solo para usuarios registrados</p>

<p>&nbsp;</p>
<table align="center" width="528" height="176" border="1">
  <tr>
    <td colspan="3"><p align="center">BASE DE DATOS LA PASEANDERA</p></td>
  </tr>
  <tr>
    <td class="Ingreso_datos"><span class="Ingreso_datos"><p align="center"><a href="../Ingreso.php">INGRESO DE DATOS</a></p></span></td>
  </tr>
   <tr>
    <td colspan="3"><p align="center"><a href="cierre.php">CERRAR SESION</a></p></td>
  </tr>
</table>
<?php
		/*session_start();
		
		session_destroy();
		
		header("Location: loguin.php");*/
?>
</body>
</html>