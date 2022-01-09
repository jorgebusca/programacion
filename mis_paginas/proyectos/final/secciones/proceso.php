<?php
//No borrar ningun campo de este código php, creado por zeuskx
 
$mymail = 'correo@correo.com'; //Poner aquí el correo donde quereis que llegue el mensaje
$cc = 'Mensaje de contacto de mi web!'; //Poner aquí el asunto del mensaje
$BoDy = ' ';
$FrOm = 'FROM:' .$_POST['t1'];
$FrOm .= 'Reply-To:' .$_POST['t1'];
$FrOm .= 'X-MAILER: PHP'.phpversion();
$BoDy .= 'Nombre: ';
$BoDy .= $_POST['t1'];
$BoDy .= "
";
$BoDy .= 'Correo: ';
$BoDy .= $_POST['t2'];
$BoDy .= "
";
$BoDy .= 'Asunto: ';
$BoDy .= $_POST['t3'];
$BoDy .= "
";
$BoDy .= 'Mensaje: ';
$BoDy .= $_POST['t4'];
$BoDy .= "";



