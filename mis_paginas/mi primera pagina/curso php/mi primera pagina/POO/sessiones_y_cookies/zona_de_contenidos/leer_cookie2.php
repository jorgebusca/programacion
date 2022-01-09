<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LEER COOKIES2</title>
</head>

<body>
<?php

	if (isset($_COOKIE["prueba"])){

		echo $_COOKIE["prueba"];
		
	}else{
		
		echo "No se creo ninguna COOKIE";
		
	}

?>

</body>
</html>