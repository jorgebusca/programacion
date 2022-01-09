<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento Prueba</title>
</head>

<body>
<?php
require("CONFIG.php");
	
	class Conexion{
		
		protected $conexion_db;
	
	public function Conexion(){
		
		$this->conexion_db=new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
		
		if($this->conexion_db->connect_errno){
			
		echo "Fallo al conectr con Mysql: " . $this->conexion_db->connect_error;
		return;	
		}
		
		$this->conexion_db->set_charset(DB_CHARSET);
		
	}
	
	
	
	
	
	
	
	}
    ?>
    
     <?php
	require "Conexion.php";
	
	class DevuelveProductos extends Conexion{
	
	public function DevuelveProductos(){
		
	parent::__construct();
			
	}
	
	public function get_productos(){
		
		$resultado=$this->conexion_db->query('SELECT * FROM clientes');
		
		$producto=$resultado->fetch_all(MYSQLI_ASOCC);
		
		return $producto;		
	}		
	}
?>

<?php
	require "DevuelveProductos.php";
	
	$clientes=new DevuelveProductos();
	
	$array_productos=$clientes->get_productos();

?>

<?php
	
	foreach($array_productos as $elementos){
	
	echo "<table><tr><td>";
	echo $elementos['codigo'] . "</td><td>";
	echo $elementos['Nombre'] . "</td><td>";
	echo $elementos['Apellido'] . "</td><td>";	
	echo $elementos['DNI'] . "</td><td>";	
	echo $elementos['CUIT'] . "</td><td></tr></table>";
	
	echo"<br>";
	echo"<br>";
	
		}

?>

    
    
</body>
</html>