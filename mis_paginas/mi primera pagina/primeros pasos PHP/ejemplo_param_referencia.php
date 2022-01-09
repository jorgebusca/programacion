<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<?php
function frase_mayus($frase,$conversion=false){
$frase=strtolower($frase);

if($conversion==true){	

$resultado=ucwords($frase);
}else{
$resultado=strtoupper($frase);

}

return $resultado;
	
}

echo (frase_mayus("esta es una frase de prueba" . "<br>"));

function incrementa(&$valor1){
		$valor1++;
		return $valor1;

}
	
	 $numero=5;
echo incrementa($numero) . "<br>";

echo $numero;

?>

<body>
</body>
</html>