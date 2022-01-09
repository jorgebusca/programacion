
<style>
h1{
	text-align:center;
}
table{
	background-color:#FFC;
	padding:5px solid;
	border:#666 5px solid;
}
.no_validado{
	font-size:18px;
	color:#F00;
	font-weight:bold;
}

.validado{
	font-size:18px;
	color:#0c3;
	font-weight:bold;
}
</style>
<?php
if (isset($_POST["enviado"])){
	$usuario=$_POST["nombre_usuario"];
	$contraseña=$_POST["Contraseña"];
	
	/*if($edad<=18){
		
	echo "<p class=\"validado\">" . "Eres menor de edad</p>";
	
	}else{
	echo "<p class=\"no_validado\">" ."Cu&iacute;date" . "</p>";
	}*/
	
	
	$resultado=$usuario=="jorge" && $contraseña=="1234" ? "Puedes Ingresar a la pagina" : "No puedes ingresar a la pagina";
	 
	 echo $resultado;
}

?>