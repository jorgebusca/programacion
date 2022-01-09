<?php
require ("Config2.php");

class Conexion2{
protected $conexion_db;

public function Conexion2(){

$this->conexion_db=new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
	  
if($this->conexion_db->connect_errno){

echo "Fallo al Conectar a MySql: " . $this->conexion_db->connect_error;

return;	
}
	$this->conexion_db->set_charset(DB_CHARSET);
}
	
}

?>