<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>javasscript</title>
</head>

<body>
	<script>
	//pasar de horas a segundos
	//Funciones
	
		Function Grados(horas){
		 var segundos = horas*3600;
		  return segundos;
		};	
		
		Grados(2);
	
	console.log('La cantidad de segundos por horas es ' + Grados(2));
	console.log('Entonces si cambia la cantidad de horas cambiara la cantidad de segundos Ej:');
	
	
	console.log('Ahora en 4 horas son ' + Grados(2));
	// pasar de grados celcius a farangei
	
	
	
	var grados_celcius = 30;
	 
	var grados_farangei = grados_celcius * 9/5 + 32;
	
	console.log(grados_farangei);
    
    </script>
    

</body>
</html>
