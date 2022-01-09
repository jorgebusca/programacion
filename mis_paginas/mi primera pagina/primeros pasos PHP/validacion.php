
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
	$edad=$_POST["edad_usuario"];
	
	if($usuario=="admin" && $edad>18){
		
	echo "<p class=\"validado\">" . "Usuario Correcto</p>";
	
	}else{
	
	echo "<p class=\"no_validado\">" ."Usuario Incorrecto" . "</p>";
		
	}
}

?>