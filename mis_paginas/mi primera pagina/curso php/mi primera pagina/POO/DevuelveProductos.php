<title>devuelve productos</title>
 <?php
	require "Conexion.php";
	
	class DevuelveProductos extends Conexion{	
	
	public function DevuelveProductos(){
		
	parent::__construct();
			
	}
	
	public function get_productos($dato){
		
//-------------------------------------------PDO----------------------------------------------------------------------------
		/*$SQL= 'SELECT * FROM clientes WHERE Nombre="' . $dato . '"';
		$sentencia=$this->conexion_db->prepare($SQL);
		$sentencia->execute(array());
		$resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		$sentencia->closeCursor();
		return $resultado;
		$this->conexion_db=null;*/
		
//--------------------------------------------POO---------------------------------------------------------------------------
		
		$resultado=$this->conexion_db->query('SELECT * FROM clientes WHERE Nombre="' . $dato . '"');
		
		$CLI=$resultado->fetch_all(MYSQLI_ASSOC);
		
		return $CLI;
	}		
	}
?>