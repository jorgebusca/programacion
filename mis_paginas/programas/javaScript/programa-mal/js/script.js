window.addEventListener("load", function(){
	console.log("Se ha cargado la pagina");
	var resuts = document.getElementById("resuts");
	var searchBtn = document.getElementById("buscaBtn");
    console.log(buscaBtn);
    searchBtn.addEventListener("click", function(){
	console.log(results); 
	results.innerHTML ="Hola<br/>Mundo<div style='background-color:blue'>como estas</div>";

	//get hobby

	var hobbyfield = document.getElementById("hobby");
	var hobby=hobbyfield.value;
	console.log(hobby);

//get gender
var genderField = document.getElementById('gender');
var seleccion = genderField.selectedIndex;
var gender = genderField.options[seleccion].value;
	console.log(gender);	
});
});
 	
	
	
	//get hobby
 	/*var hobbyfield = document.getElementById('hobby'),
 	var hobby = hobbyfield.value,
 	console.log(hobby),

 	//get gender
 	var genderField = document.getElementById('gender'),
 	var selected = genderField.selectedIndex,
 	var gender = genderField.option[selected].value,
 	console.log(gender),

 	var resultsHTML = '',
 	var numUsers = user.length,

 	for (var i = 0; i<numUsers; i++){
 		resultsHTML += <div class="person-row">\
		<img src="imagenes/avatares/' + users[i].avatar + '" />\
		<div class="person-info">\
		<div>' + users[i].name + '</div>\
		<div>' + users[i].hobby + '</div></div>\
		<button>Add as friend</button></div>':
 	}

 	results.innerHTML = 'mostrar resultados';
})

var users = [
	{
		name: 'Lucy',
		gender: 'F',
		hobby: 'pets',
		avatar: 'avatar1.png',
	},
	{
		name: 'Jorge',
		gender: 'M',
		hobby: 'pesca',
		avatar: 'avatar4.png',
	},
	{
		name: 'Marcelo',
		gender: 'M',
		hobby: 'futbol',
		avatar: 'avatar3.png',
	},
	{
		name: 'Luciano',
		gender: 'M',
		hobby: 'tennis',
		avatar: 'avatar8.png',
	},
	{
		name: 'Lucia',
		gender: 'F',
		hobby: 'voley',
		avatar: 'avatar5.png',
	},
	{
		name: 'Gabriel',
		gender: 'M',
		hobby: 'futbol',
		avatar: 'avatar2.png',
	}
],*/