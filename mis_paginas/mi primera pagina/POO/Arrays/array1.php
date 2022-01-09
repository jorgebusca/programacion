<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

	$semanas=array("lunes","martes","miercoles","jueves","viernes");
	$semana[]="Lunes";
	$semana[]="Martes";
	$semana[]="Miercoles";
	$semana[]="Jueves";
	$semana[]="Viernes";
	$semana[]="Sabado";
	$semana[]="Domingo";

	echo $semanas[1] . "<br>";
	echo $semana[2] . "<br>";
	
	sort ($semana);


	for($i=0;$i<count($semana);$i++){
	echo $semana[$i] . "<br>";	
		
	}

	$datos=array("Nombre"=>"Juan","Apellido"=>"Gonzales","Edad"=>29);
	
	
	echo $datos["Apellido"] . "<br>";
	
	if(is_array($datos)){
	
		echo "Es un array <br>";	
	}else{
	
		echo "No es un array <br>";
	}
	
	$datos["pais"]="Argentina";
foreach($datos as $clave=>$valor){
	echo "A $clave le corresponde $valor <br>";	
	
}
	
?>
</body>
</html>