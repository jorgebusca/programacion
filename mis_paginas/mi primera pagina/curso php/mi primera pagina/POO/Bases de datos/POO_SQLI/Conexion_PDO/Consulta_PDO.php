<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta_PDO</title>
</head>

<body>

<?php
	
	$busqueda_Nom=$_GET["nombre"];
	$busqueda_Ape=$_GET["apellido"];
	$busqueda_DNI=$_GET["DNI"];
	$busqueda_CUIT=$_GET["CUIT"];

	try{
	$base=new  PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo 'conexion OK' . '<br>';
	
	$base->EXEC("SET CHARACTER SET utf8");
	
	$SQL="INSERT INTO CODIGO, NOMBRE, APELLIDO, DNI, CUIT FROM CLIENTES WHERE Nombre= :Nom AND Apellido= :Ape AND DNI= :DNI AND CUIT= :CUIT";


$resultado=$base->prepare($SQL);

$resultado->execute(array(":Nom"=>$busqueda_Nom, ":Ape"=>$busqueda_Ape, ":DNI"=>$busqueda_DNI, "CUIT"=>$busqueda_CUIT));

while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	echo "codigo: " . $registro["CODIGO"] . "<br>". "Nombre: " . $registro['NOMBRE'] . "<br>" . "Apellido: " . $registro['APELLIDO'] . "<br>" . "DNI: " . $registro['DNI'] . "<br>" . "CUIT: " . $registro['CUIT'] . "<br>" . "<br>";	
	
}
	$resultado->closeCursor();
	
	}catch(Exception $e){
		die('Error: ' . $e->GetMessage());
		
	 finally;
	
	$base=null;
	}

?>
</body>
</html>