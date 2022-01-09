<?php
/*
Acá vamos a recibir las credenciales del form de login, y 
verificar que sean válidas.
Si lo son, lo vamos a autenticar, y redirigir a la sección de
noticias.
Si no, como es costumbre, lo pateamos al login de nuevo para
que arregle los datos.
*/

require '../../configuracion/conexion.php';
require '../../recursos/administracion/autenticacion.php';

// Capturamos los datos.
$email = $_POST['email'];
$password = $_POST['password'];

// TODO: Validar...

// Verificamos si el usuario es correcto.
$usuario = login($db, $email, $password);

//Si hay un usuario lo redirecciono a home sino vuelve a login
if($usuario) {
    
    header("Location: ../index.php?s=Home");
} else {
    $_SESSION['errores'] = [
        'credenciales' => 'Las credenciales ingresadas no coinciden con nuestros registros.'
    ];
    $_SESSION['old_data'] = $_POST;
    header("Location: ../index.php?s=login");
}