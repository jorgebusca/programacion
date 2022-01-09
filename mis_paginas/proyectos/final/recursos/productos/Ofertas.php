<?php


// Habiendo incluido conexion.php, ya tenemos la variable $db.

//Obtengo los productos que estan seteados como oferta en la db
$query = "SELECT I.IDPRODUCTO,C.DESCRIPCION AS CATEGORIA,I.NOMBRE,I.DETALLE,I.PRECIO,I.FOTO FROM jm.items I 
INNER JOIN jm.categoria C ON I.IDCATEGORIA = C.IDCATEGORIA WHERE ESOFERTA =1";

$OFERTAS = mysqli_query($db, $query);

?>