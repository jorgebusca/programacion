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
<?php

class Coche{
	
	var $ruedas;
	var $color;
	var $motor;
	
	function coche(){//Metodo constructor
	
	$this->ruedas=4;
	$this->color="";
	$this->motor=1600;
	
	
	}
	
	function arrancar(){
		echo "<p class=\"validado\">" . "el motor esta en marcha <br>";
	}
	
	function girar(){
		echo "<p class=\"validado\">" . "el auto esta girando <br> ";
	}
	
	function frenar(){
		echo "<p class=\"validado\">" . "el auto esta frenando <br>";
	}
	
	function establece_color($color_coche,$nombre_coche){
			$this->color=$color_coche;
			echo"el color de " . $nombre_coche . " es " . $color_coche ."<br>";
	}
}
$renault=new Coche();//Estado inicial al objeto
$mazda=new Coche();

$renault->establece_color("azul","Renault");

$mazda->establece_color("rojo","Mazda");


//----------------------------------------------------------------------------------------------------
	
	class Camion extends coche{
	
		
	function Camion(){//Metodo constructor
	
	$this->ruedas=8;
	$this->color="";
	$this->motor=2600;
	
	
	}
	
}
	
?>
<body>
</body>
</html>