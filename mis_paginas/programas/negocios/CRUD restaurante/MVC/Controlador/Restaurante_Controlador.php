
<title>Producto Controlador</title>
<?php 
require_once("../../../Food Trucks/CRUD/paginacion/MVC/Controlador/Modelo/Restaurante_Modelo.php");

$producto=new Restaurante_Modelo();

$matrizProductos=$producto->get_productos();

require_once( "../../../Food Trucks/CRUD/paginacion/MVC/Controlador/Vista/Restaurante_Vista.php" )	
?>