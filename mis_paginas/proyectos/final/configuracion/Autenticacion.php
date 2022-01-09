<?php

/**
 * Intenta loguear al usuario con el $email y $password provistos.
 * Si son correctos, retorna un array con los datos del usuario,
 * y marca como autenticado al usuario.
 * Si no son correctos, retorna falso.
 *
 * @param mysqli $db
 * @param string $email
 * @param string $password
 * @return array|bool
 */
function login($db, $email, $password) {
    // Como el password lo tenemos que verificar desde php,
    // la consulta para buscar al usuario va a limitarse a usar
    // el email.
    // Escapamos el email.
    $email = mysqli_real_escape_string($db, $email);
    
    // Hacemos la consulta.
    $query = "SELECT * FROM usuarios
            WHERE email = '$email'";
    $res = mysqli_query($db, $query);
    
    // Ahora tenemos 2 maneras para revisar si el email es
    // válido.
    // Si es válido, tiene que haber un registro en el resultado.
    // Basados en eso, la forma 1:
    // mysqli_num_rows recibe un resultset y retorna la cantidad
    // de resultados.
    /*if(mysqli_num_rows($res) == 1) {
        // Hacemos el fetch.
        $fila = mysqli_fetch_assoc($res);
    }*/
    
    // Forma 2:
    // Usamos el mismo mysqli_fetch_assoc para realizar la
    // verificación.
    // mysqli_fetch_assoc si hacemos memoria, retornada un array
    // con los datos de la fila, si había un registro, o false
    // si no había registros.
    // En otras palabras, esta condición se lee:
    // "Si podemos sacar una fila del resultado...".
    if($fila = mysqli_fetch_assoc($res)) {
        // El email existe, ahora tenemos que verificar si los
        // passwords coinciden.
        if(password_verify($password, $fila['password'])) {
            // Si coinciden, entonces el password es correcto.
            
            // Autenticamos al usuario.
            // La idea es sencilla: vamos a guardar en una
            // variable de sesión el id del usuario.
            $_SESSION['id_usuario'] = $fila['id_usuario'];
            // Opcionalmente, pueden guardar otros datos.
            $_SESSION['email'] = $fila['email'];
            
            // Ahora procedemos a retornar el array con los
            // datos del usuario.
            return $fila;
        }
    }
    // Si alguna condición falló, retornamos false.
    return false;
}

/**
 * Cierra la sesión.
 */
function logout() {
    unset($_SESSION['id_usuario'], $_SESSION['email']);
}


/**
 * Retorna true si el usuario está autenticado.
 * false de lo contrario.
 *
 * @return bool
 */
function estaAutenticado() {
    /*if(isset($_SESSION['id_usuario'])) {
        return true;
    } else {
        return false;
    }*/
    /*if(isset($_SESSION['id_usuario'])) {
        return true;
    }
    return false;*/
    return isset($_SESSION['id_usuario']);
}

/**
 * Retorna el email del usuario autenticado.
 *
 * @return string
 */
function autenticacionObtenerEmail() {
    return $_SESSION['email'];
}




