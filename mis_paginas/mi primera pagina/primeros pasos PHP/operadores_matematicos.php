<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<p>&nbsp;</p>
<form name="form1" method="post" action="respuesta.php">
	<p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
     <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="Operacion"></label>
    <select name="Operacion" id="Operacion">
    <option>Suma</option>
    <option>Resta</option>
	<option>Multiplicacion</option>	
    <option>Division</option>
    <option>Modulo</option>
	</select>
	</p>
	<p>
	<input type="submit" name="button" id="button" value="Enviar" onclick="prueba">
    </p>
    </form>
<p>&nbsp;</p>
    


</body>
</html>