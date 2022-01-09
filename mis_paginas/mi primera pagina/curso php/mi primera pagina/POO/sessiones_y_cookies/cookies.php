<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CARGANDO COOKIES</title>
</head>

<body>
<?php
		setcookie("prueba", "Esta es la informacion de nuestra primera cookie", time()+300, "/POO/POO/sessiones_y_cookies/zona%20de%20contenidos/"); 

		echo "Se ha creado una cookie";
?>



</body>
</html>