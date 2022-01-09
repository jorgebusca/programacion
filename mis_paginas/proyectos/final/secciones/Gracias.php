<?php
//Recupera los parametros nombre y apellido por post que fueron enviados por el form Contacto
 $nombre =  $_POST['nombre'];
 $apellido = $_POST['apellido'];
 
?>
<section id="gracias" >
       <h1 id="recibido">¡Recibido!</h1>
       <p>Muchas gracias por contactarnos.<b><?= $nombre; ?> <?= $apellido;?></b></p>
       <p>En unos momentos nos pondremos en contacto con usted.</p>
	   <img src="recursos/img/enviado.gif" alt="tilde de mensaje enviado">
       <a href="index.php?s=Home">Volver al Inicio</a>
</section>  
	
	