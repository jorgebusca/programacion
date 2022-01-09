<?php
//Operacione en la base de datos
//Trae todos los productos
$queryProductos = "SELECT I.IDPRODUCTO,C.DESCRIPCION AS CATEGORIA,I.ESOFERTA,I.NOMBRE,I.DETALLE,I.PRECIO,I.FOTO FROM jm.items I 
INNER JOIN jm.categoria C ON I.IDCATEGORIA = C.IDCATEGORIA ";

$PRODUCTOS = mysqli_query($db, $queryProductos);


function getProductoById($db,$Id) {
 $id = mysqli_real_escape_string($db, $Id);
    
    //Trae un producto
$queryProductobyId = "SELECT I.IDPRODUCTO,C.DESCRIPCION AS CATEGORIA,I.NOMBRE,I.DETALLE,I.PRECIO,I.ESOFERTA,I.FOTO FROM jm.items I 
INNER JOIN jm.categoria C ON I.IDCATEGORIA = C.IDCATEGORIA WHERE I.IDPRODUCTO =  $Id  ";
    
    
$ProductoDetalle = mysqli_query($db, $queryProductobyId);
    
    
    return mysqli_fetch_assoc($ProductoDetalle);
}

function getCategorias($db)
{
    //Trae categorias
    // Armamos y ejecutamos el query.
    $queryCategorias = "SELECT IDCATEGORIA, DESCRIPCION FROM jm.CATEGORIA";
    return mysqli_query($db, $queryCategorias);
    
}
function crearproducto($db, $data) {
  //Crea el producto
    $nombre = mysqli_real_escape_string($db, $data['nombre']);
    $detalle = mysqli_real_escape_string($db, $data['detalle']);
    $categoria = mysqli_real_escape_string($db, $data['categoria']);
    $imagen = mysqli_real_escape_string($db, $data['imagen']);
    $esoferta = mysqli_real_escape_string($db, $data['esoferta']);
    $precio = mysqli_real_escape_string($db, $data['precio']);
    $idusuario =  mysqli_real_escape_string($db, $data['idusuario']);
    
    
    $query = "INSERT INTO ITEMS (NOMBRE,DETALLE,PRECIO,IDCATEGORIA,FOTO,ESOFERTA,IDUSUARIO_CREADO)
    VALUES ('$nombre', '$detalle', '$precio', '$categoria', '$imagen', '$esoferta', '$idusuario')";
    
    // Ejecutamos el query.
    // Como la consulta es un INSERT, mysqli_query retorna
    // true o false.
    $exito = mysqli_query($db, $query);
    
    return $exito;
}

function editarproducto($db, $id,$data) {
  
//Modifica el producto
    $nombre = mysqli_real_escape_string($db, $data['nombre']);
    $detalle = mysqli_real_escape_string($db, $data['detalle']);
    $categoria = mysqli_real_escape_string($db, $data['categoria']);
    $imagen = mysqli_real_escape_string($db, $data['imagen']);
    $esoferta = mysqli_real_escape_string($db, $data['esoferta']);
    $precio = mysqli_real_escape_string($db, $data['precio']);
    
    
    $query = "
    UPDATE ITEMS SET NOMBRE = '$nombre',
    DETALLE = '$detalle',
    PRECIO = $precio,
    IDCATEGORIA = $categoria,
    FOTO = '$imagen',
    ESOFERTA = $esoferta where IDPRODUCTO = $id ";
    
    // Ejecutamos el query.
    // Como la consulta es un INSERT, mysqli_query retorna
    // true o false.
    $exito = mysqli_query($db, $query);
    
    return $exito;
}

function eliminarproducto($db, $id) {
  
//Elimina el producto
    //Construyo la sentencia  y le agrego el id
    $query = "DELETE FROM JM.ITEMS WHERE IDPRODUCTO = $id ";
    $exito = mysqli_query($db, $query);
    
    return $exito;
}
