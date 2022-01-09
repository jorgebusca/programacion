<?php require 'recursos/productos/Productos.php';?>
<section class="container">
 <h2>PRODUCTOS</h2>
    
<div class="container">
    <div class="row">  
	<?php foreach($PRODUCTOS as $PRODUCTO): ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
			<a class="d-block" href="index.php?s=Listado-Detalle&id=<?= $PRODUCTO['IDPRODUCTO'];?>">
              <img  src="recursos/img/<?=$PRODUCTO['FOTO'];?>"/>
		  </a>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="#"><?=$PRODUCTO['NOMBRE'];?></a>
                </h3>
                <h5><B>DETALLE:</B><?=$PRODUCTO['DETALLE'];?></H5>
                <h5><B>PRECIO:</B><?=$PRODUCTO['PRECIO'];?></h5>
                <h5><B>CATEGORIA:</B><?=$PRODUCTO['CATEGORIA'];?></h5>
				</div>
             </div>			
          </div>
	<?php endforeach; ?>	  
    </div>
    </div>
</section>