<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<?php

class Compra_Vehiculo{
	
private $precio_base;

private static $descuento=0;

function Compra_Vehiculo($gama){//metodo constructor

	if($gama=="urbano"){

		$this->precio_base=100000;	
	
	}else if($gama=="compacto"){
	
		$this->precio_base=200000;
		
	}else if ($gama =="berlina"){
		
		$this->precio_base=300000;	
	}
	
}//fin constructor

			static function descuento_gobierno(){
				if (date("m-d-y")>" 07-01-2019"){
			
			self::$descuento=45000;	}
			}

		function climatizador(){//Climatizador
		
		
			$this->precio_base+=2000;	
			
		}//fin climatizador
		
		function navegador_gps(){//Navegador
		
			$this->precio_base+=2500;
		
		}//fin navegador_gps
		
		
		function tapiceria_cuero($color){//tapiceria
		
		if($color=="blanco"){//if
		
			$this->precio_base+=3000;
			
		}else if ($color=="beige"){

			 $this->precio_base+=3500;	

			}else{
			
			$this->precio_base+=5000; 
			
			}//fin else
			
			}//fin de tapiceria
			
		
			function precio_final(){
			
			$valor_final=$this->precio_base-self::$descuento;
			return $valor_final;
		
			}//fin precio final
	
		}//fin de clase
?>
<body>
</body>
</html>