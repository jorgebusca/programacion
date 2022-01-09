<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src="../../../SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<link href="../../../SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
</head>

<body>


<label>
<input type="text" name="resultado" id="resultado" />
<?php //visor donde quiero que se vea la operacion?>
</label>
<?php //aqui comienzan los botones de la calculadora ?>
<br />

<label>
  <input type="button" name="1" value="1" id="1" />

  <input type="button" name="2" value="2" id="2" />
 
  <input type="button" name="3" value="3" id="3" />
  
  <input type="button" name="+" value="+" id="+" />
 
  </label>
<br />

<label>
  <input type="button" name="4" value="4" id="4" />

  <input type="button" name="5" value="5" id="5" />
  
  <input type="button" name="6" value="6" id="6" />
  
  <input type="button" name="-" value="-" id="-" />
  
  </label>
  
<br />
<label>
  <input type="button" name="7" value="7" id="7" />

  <input type="button" name="8" value="8" id="8" />
  
  <input type="button" name="9" value="9" id="9" />
  
  <input type="button" name="X" value="X" id="X" />
  
  </label>
  
<br />
<label>
  <input type="button" name="," value="," id="," />
  
  <input type="button" name="0" value="0" id="0" />
  
  <input type="button" name="." value="." id="." />
  
  <input type="button" name="%" value="%" id="%" />
  </label>
<br />
<span class="radioRequiredMsg">Realice una selección.</span></span>
<script type="text/javascript">
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
</script>
</body>
</html>