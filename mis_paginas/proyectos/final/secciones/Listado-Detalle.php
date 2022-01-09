<?php 
require 'recursos/productos/Productos.php';

//Obtengo el valor del id que recibo como parametro y lo busco en la db
$id = $_GET['id'];

$EsteProd = getProductoById($db,$id);

?>
<section class="container">
<h2>Articulo</h2>
<div class="row">        

<div class="float-sm-left">
        <div class="float-sm-left">
              <a href="#"><img class="card-img-top" src="recursos/img/<?=$EsteProd['FOTO'];?>"></a>
              <h1 class="card-title"><b><?=$EsteProd['NOMBRE'];?></b></h1>
                <a class="btn btn-success" href="index.php?s=Productos">Volver</a> 
        </div>
        <div class="float-sm-right" >
                <div class="card-body">
                <h5><B>DETALLE:</B><?=$EsteProd['DETALLE'];?></H5>
                <h5><B>PRECIO:</B><?=$EsteProd['PRECIO'];?></h5>
                <h5><B>CATEGORIA:</B><?=$EsteProd['CATEGORIA'];?></h5>
				</div>
        </div>
    
		  
</div>
   
    </div>
</section>    