<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Busqueda</title>
<style>

table{width:300px;
margin:auto;
background-color:#69F;
border:2px solid #F00;
padding:5px;
}
td{text-align:center;
}

</style>
</head>
<h1 align="center" >Formulario de Busqueda</h1>

	<form action="Consulta_PDO.php" method="get">
    <table>
    <tr><td>Nombre: </td><td> <input type="text" name="nombre"></td></tr>
    <tr><td>Apellido:</td><td> <input type="text" name="apellido"></td></tr>
    <tr><td>DNI:</td><td> <input type="text" name="DNI"></td></tr>
    <tr><td>CUIT:</td><td> <input type="text" name="CUIT"></td></tr>
    <tr><td colspan="2"><input type="submit" name="enviado" value="consultar"> </td></tr></table>  
    </form> 
    
    
    
<body>
</body>
</html>