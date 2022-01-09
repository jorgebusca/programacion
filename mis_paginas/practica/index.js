// JavaScript Document
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
		<title>pagina Amor</title>
		<link href="css/reset.css" rel="stylesheet"></link>
		<link href="css/style.css" rel="stylesheet"></link>
</head>
<body>
<div id="header"><h1>Amor Divino</h1></div>
	<div id="main">
		<div class="row">
			<label>Gender</label>
			<select id="gender">
				<option value="F">Femenino</option>
				<option value="M">Masculino</option>
				<option value="O">Otro</option>
			</select>
		</div>
		<div class="row">
			<label>Hobbies</label>
			<input type="text" id="hobby" />
		</div>
			<div class="row">
			<button id="seachBtn">Search</button>
			</div>
		</div>	
	</div>
	<div id="results">
	</div>
	<div class="person-info">
		<button>Add as friend</button>
			<div>Jorge</div>
			<div>sports, pets, party</div>
		</div>
		<button>Add as friend</button>
	</div>
	<div class="person-row">
		<img src="imagenes/avatares/avatar1.png" />
		<div class="person-info">
			<div>Jorge</div>
			<div>sports, pets, party</div>	
		</div>
		<button>Add as friend</button>
	</div>		
</div>			
	<script src="js/script.js"></script>
</body>
</html>
