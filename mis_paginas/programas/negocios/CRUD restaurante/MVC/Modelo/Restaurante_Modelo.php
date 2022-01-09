<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Producto Modelo</title>
</head>

<body>

<?php 
class Restaurante_Modelo{

private $db;

private $producto;

public function __construct(){

require_once("Conectar.php"); 

$this->db=Conectar::coneccion();

$this->producto=array();
	
}

public function get_productos(){
	

$consulta=$this->db->query("SELECT * FROM DATOS");

WHILE($FILAS=$consulta->fetch(PDO::FETCH_ASSOC)){


	$this->producto[]=$FILAS;
	
}

return $this->producto;
	
}

}

?>


</body>
</html>