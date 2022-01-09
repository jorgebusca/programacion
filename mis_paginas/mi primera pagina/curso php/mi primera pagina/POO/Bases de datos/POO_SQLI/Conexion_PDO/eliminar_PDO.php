<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ELIMINAR_PDO</title>
</head>

<body>

<?php
	
	$busqueda_Cod=$_GET["Codigo"];
	

	try{
	$base=new  PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo 'conexion OK' . '<br>';
	
	$base->EXEC("SET CHARACTER SET utf8");
	
	//$SQL="INSERT INTO CLIENTES(NOMBRE, APELLIDO, DNI, CUIT)VALUES (:Nom,:Ape,:DNI,:CUIT)";
	$SQL="DELETE FROM CLIENTES WHERE CODIGO=:Cod";

$resultado=$base->prepare($SQL);

//$resultado->execute(array(":Nom"=>$busqueda_Nom, ":Ape"=>$busqueda_Ape, ":DNI"=>$busqueda_DNI, ":CUIT"=>$busqueda_CUIT));

/*while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	echo "codigo: " . $registro["CODIGO"] . "<br>". "Nombre: " . $registro['NOMBRE'] . "<br>" . "Apellido: " . $registro['APELLIDO'] . "<br>" . "DNI: " . $registro['DNI'] . "<br>" . "CUIT: " . $registro['CUIT'] . "<br>" . "<br>";	
	
}*/

	$resultado->execute(array(":Cod"=>$busqueda_Cod));

	echo "registros eliminado satisfactoriamente";
	$resultado->closeCursor();
	
	}catch(Exception $e){
		die('Error: ' . $e->GetMessage());
		
	 finally;
	
	$base=null;
	}

?>
</body>
</html>