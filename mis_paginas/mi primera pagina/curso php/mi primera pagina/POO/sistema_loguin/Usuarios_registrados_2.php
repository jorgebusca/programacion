<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro finalizado</title>
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

	echo "Usuario: " . $_SESSION["Usuario"] . "<br><br>";

?>


<p>Esto es informacion solo para usuarios registrados</p>

<p><a href="cierre.php">cierra sesion</a></p>
<p>&nbsp;</p>
<p><a href="Usuarios_registrados_1.php">volver</a></p>
</body>
</html>