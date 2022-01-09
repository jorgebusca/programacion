<?php
//Otros archivos necesarios para la configuracion de base de datos
require 'configuracion/conexion.php';

//Carrito de compras


require_once ('php/CreateDb.php');
require_once ('./php/component.php');


if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}





//Si el parametro s esta vacio le asigno home a seccion
$seccion = $_GET['s'] ?? 'Home';
//Indico las secciones perimitidas
$seccionesPermitidas = [
    'Home' => ['title' => 'El Herrero'],
    'Productos' => ['title' => 'El Herrero :: Listado de Productos'],
    'Contacto' => ['title' => 'El Herrero :: Contacto'],
    'Listado-Detalle' => ['title' => 'El Herrero :: Detalle del producto'],
    'Login' => ['title' => 'El Herrero :: Login'],
    '404' => ['title' => 'Oops! Página no encontrada'],
    'Gracias' => ['title' => 'Gracias por contactarnos'],
];


//Si la seccion no aparece lo redirecciono a 404
if(!isset($seccionesPermitidas[$seccion])) {
    $seccion = "404";
}


?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $seccionesPermitidas[$seccion]['title'];?></title>
	<link rel="icon" type="recursos/img/icono.png" href="recursos/img/icono.png">     	
    <link rel="stylesheet" href="css/estilos.css"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>

<body>
    <header id="cabecera" class="container-fluid">
        <?php require 'recursos/templates/menu.php';?>
    </header>
    <main class="content">

            <?php
                //Si la seccion no existe lo redirecciono a mantenimiento
            if(file_exists('secciones/' . $seccion . '.php')) {
                require 'secciones/' . $seccion . '.php';
            } else {
                require 'secciones/mantenimiento.php';
            }
            ?>
    </main>
    
   <footer>
	    <?php require 'recursos/templates/footer.php';?>
   </footer>
   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>