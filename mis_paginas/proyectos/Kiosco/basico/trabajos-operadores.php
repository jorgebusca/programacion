<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>
	h1{
		text-align:center;
	}
	table{
		background-color:#ffc;
		padding:5px;
		border:#666 5px solid
	}
	.no_validado{
		font-size:18px;
		color:#f00;
		font-weight:bold
	}
	.validado{
		font-size:18px;
		color:#0c3;
		font-weight:bold;
	}

</style>
</head>

<body>
<h1>Usando Comparadores de Comparacion</h1>

<form action="validacion.php" method="post" name="datos_usuarios" id="datos_usuarios">
<table width="15%" align="center">
	<tr>
    <td>Nombre:</td>
    <td><label for="nombre_usuario"></label></td>
    <td><input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <td>Edad:</td>
    <td><label for="edad_usuario"></label></td>
    <td><input type="text" name="edad_usuario" id="edad_usuario"></td>
    </tr>
    <tr>
    <td> </td>
    <td> </td>
    </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar" /></td>
    </tr>
    </table>
    </form>
    
</body>
</html>