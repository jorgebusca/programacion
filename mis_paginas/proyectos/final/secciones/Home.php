<?php require 'recursos/productos/ofertas.php';?>
<section class="container">

    <h1>Bienvenidos a Nuestro Sitio Web</h1>
    <div class="row">
        <div class="col-md-12 carrusel d-none d-md-block">
            <div class="carousel-item active">
                <img src="recursos/img/portada_home.jpg" alt="Portada de El Herrero">
                <p>Somos <strong>"El Herrero"</strong> es una Pyme argentina que comercializa herramientas e insumos de alta calidad.
                    Nuestras marcas están en la vanguardia tecnológica, pudiendo ofrecer una amplia gama de herramientas e insumos sobresalientes,
                    que redundan en menores costos y mayor calidad.
                    Estar a la altura de lo que se espera de nosotros -ha sido, es y será- nuestra razón de ser. Confianza y servicio, pruébenos
                    y estableceremos una larga y mutuamente fructífera relación comercial.
                    La empresa desde el año 1994 se dedica íntegramente a la fabricación de alta calidad de herramientas con lo que nos caracteriza y nos diferencia de otras marcas es que hemos desarrollado nuestro producto con un material
                    completamente nuevo e innovador: nuestra exclusiva pinsas o casco de proteccion, siendo los primeros y los únicos
                    en la argentina en fabricar herramientas con esta técnica. Esto le da a nuestro producto varias ventajas tales
                    como su resistencia, calidad, flexibilidad, durabilidad, buena presentación, un precio accesible y la posibilidad de
                    incorporar a nuestro catálogo con una variedad de colores distintos, introduciendo un elemento de diseño que no se ha visto anteriormente
                    en la fabricación de herramientas.</p>
            </div>
        </div>
    </div>
    <h2 class="mt-4">Nuestras ofertas</h2>
    <div class="row">


        <?php
               //Dibujo los productos en oferta
        foreach($OFERTAS as $oferta): ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-10">
                <a class="d-block" href="index.php?s=Listado-Detalle&id=<?= $oferta['IDPRODUCTO'];?>">
                    <img src="recursos/img/<?=$oferta['FOTO'];?>" />
                </a>
                <div class="card-body">
                    <h3 class="card-title">
                        <a href="#"><?=$oferta['NOMBRE'];?></a>
                    </h3>
                    <h5><B>DETALLE:</B><?=$oferta['DETALLE'];?></h5>
                    <h5><B>PRECIO:</B><?=$oferta['PRECIO'];?></h5>
                    <h5><B>CATEGORIA:</B><?=$oferta['CATEGORIA'];?></h5>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
