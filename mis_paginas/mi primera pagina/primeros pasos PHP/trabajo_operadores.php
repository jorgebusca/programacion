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
	background-color:#FFC;
	padding:5px solid;
	border:#666 5px solid;
}
.no_validado{
	font-size:18px;
	color:#F00;
	font-weight:bold;
}

.validado{
	font-size:18px;
	color:#0c3;
	font-weight:bold;
}
</style>
</head>

<body>

<h1>USANDO OPERADORES DE COMPARACION</h1>
<form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario">

<table width="15%" align="center">
<tr>
	<td>Nombre:</td>
    <td><label for="nombre_usuario"></label>
    <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
</tr>
<tr>
    <td>Edad:</td>
    <td><label for="Edad_usuario"></label>
    <input type="text" name="edad_usuario" id="edad_usuario"></td>
    </tr>
        <tr>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        </tr>
        <tr>
        <td colspan="2" align="center"><input type="submit" name="enviado" id="enviado" value="Enviar"></td>
        </tr>
        </table>
        </form>
        


</body>
</html>