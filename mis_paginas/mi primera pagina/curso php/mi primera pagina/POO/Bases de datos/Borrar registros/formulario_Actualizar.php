<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Modificacion</title>

<style>
h1{
	text-align:center;
	color:#00F;
	border-bottom:double #0000FF;
	width:90%;
	margin:auto;
	
}
	
	table{
		border:1px solid #F00;
		padding:20px 50px;
		margin-top:50px;
	}
	body{
		background-color:#FFC;
	}
</style>
</head>

<body> 
<h1>Modificar Registro</h1>
<form method="get" action="RESULTADO_BUSQUEDA.php" >
<table border="1" align="center"> 
<tr>
 <td>NOMBRE</td>
 <td><label for="NOMBRE"></label><input type="text" name="NOMBRE" id="NOMBRE"></td>
 </tr>
 
 <tr>
 <td>APELLIDO</td>
 <td><label for="APELLIDO"></label><input type="text" name="APELLIDO" id="APELLIDO"></td>
 </tr>
 
 <tr>
 <td>DNI</td>
 <td><label for="DNI"></label><input type="text" name="DNI" id="DNI"></td>

 </tr>
  <tr>
 <td>CUIT</td>
 <td><label for="CUIT"></label><input type="text" name="CUIT" id="CUIT"></td>
 </tr>
 
 <tr>
 <td align="center"> <input type="submit" name="Modificar" value="Modificar"></td>
 </tr>
</table>   
</form>
</body>
</html>