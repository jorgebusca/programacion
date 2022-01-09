<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validacion de Usuario</title>
<style>
	h1{text-align:center;
	}
	table{
		width:25%;
		background-color:#C30;
		border: 2px dotted #003399;
		margin:auto;}
		.izq{text-align:right;
		}
		.der{
			text-align:left;
		}
		td{
			text-align:center;
			padding:10px;
		}
</style>
</head>

<body>
 <h1>Validacion de Usuario</h1>
 
 <form action="comprueba_loguin.php" method="post"> 
 <table>
 <tr>
 <td class="izq">
 Login</td><td class="der"><input type="text" name="login"></td></tr>
 <tr><td class="izq">Password:</td><td class="der"><input type="password" name="password"></td></tr>
<tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td></tr></table>
<?php


?>

</body>
</html>