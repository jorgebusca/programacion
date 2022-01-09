
<title>DevuelveProductos2</title>
<?php

		require "Conexion2.php";
		
		class DevuelveProductos2 extends Conexion2{
		
		public function DevuelveProductos2(){
			
			parent::__construct();
		}
			
			public function get_clientes2(){
			$resultado=$this->conexion_db->query('SELECT * FROM clientes');
			
			$clientes=$resultado->fetch_all(MYSQLI_ASSOC);
			
			return $clientes;	
			}
			
		}

?>

