<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro finalizado pagina 4</title>
</head>

<body>
<?php
		session_start();
		if (!isset($_SESSION["Usuario"])){
			
			header("Location:loguin.php");
			
		}

?>

<h1>Bienvenidos Usuarios</h1>

<?php

	echo "Hola: " . $_SESSION["Usuario"] . "<br><br>";

?>


<p>Esto es informacion solo para usuarios registrados</p>

<p>&nbsp;</p>
<table width="528" height="176" border="1">
  <tr>
    <td colspan="3"><p class="CENTRADO">USUARIOS REGISTRADOS</p></td>
  </tr>
  <tr>
    <td class="USUARIO_1"><span class="USUARIO_1"><a href="Usuarios_registrados_1.php">PAGINA_1</a></span></td>
    <td class="USUARIO_2"><a href="Usuarios_registrados_2.php">PAGINA_2</a></td>
    <td class="USUARIO_3"><a href="Usuarios_registrados_3.php">PAGINA_3</a></td>
    <tr><td class="CIERRE"><a href="cierre.php">cierra sesion</a></td>
    <td><a href="Usuarios_registrados_1.php">volver</a></td>
    </tr>
  </tr>
</table>
<p>&nbsp;</p>

<p>
<p>&nbsp;</p>
<p></p>
</body>
</html>