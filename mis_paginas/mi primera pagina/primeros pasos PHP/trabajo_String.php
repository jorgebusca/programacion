<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>


<style>

  .resaltar{
	  color:#f00;
	  font-weight:bold;
  }
  
  </style>
</head>

<body>

<?php

		$variable1="casa";
		$variable2="CASA";
		
		$resultado=strcasecmp($variable1, $variable2);//devuelve 1 si no son iguales o 0 si son iguales
		
		if ($resultado){
			
			echo "No Coinciden";
			
		}else{
			
			echo "Coinciden";
			
		}

	echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";
?>
</body>
</html>