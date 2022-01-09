<style>
	h1{
		text-align:center;
	}
	table{
		background-color:#ffc;
		padding:5px;
		border:#666 5px solid
	}
	.no_validado{
		font-size:48px;
		color:#f00;
		font-weight:bold
	}
	.validado{
		font-size:48px;
		color:#0c3;
		font-weight:bold;
	}

</style>

<?php
		if(isset($_POST["enviando"])){
			
		$usuario=$_POST["nombre_usuario"];
		$edad=$_POST["edad_usuario"];	
			 
	 if($usuario=="Jorge" && $edad>=18){
		 echo "<p class='validado'>bienvenido</p> <br>";
	 }else{
		 echo "<p class='no_validado'>Usuario no registrado <br></p> ";
	 }
		}   
    
?>