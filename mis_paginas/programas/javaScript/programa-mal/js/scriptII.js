/*window.onload = iniciar;

function iniciar (){
	var buscarBtn = document.getElementById('buscarBtn')
buscarBtn.addEventListener('click', clicBtnBuscar);
	}

function clicBtnBuscar(){
	var busqueda = document.buscarBtn

}*/

window.addEventListener('load', fuction(){
	console.log('se ha cargado la pagina'),
	var results = document.getElementsById('resuts'),
	var searchBtn = document.getElementById('searchBtn'),
	searchBtn.addEventListener,'click',fuction(){
		results.innerHTML = 'hola<br/>mundo <br style="background-color:blue;">Como estas</div>',
	}
}),
 	get hobby
 	var hobbyfield = document.getElementById('hobby'),
 	var hobby = hobbyfield.value,
 	console.log(hobby),

 	//get gender
 	var genderField = document.getElementById('gender'),
 	var selected = genderField.selectedIndex,
 	var gender = genderField.option[selected].value,
 	console.log(gender),

 	var resultsHTML = '',
 	var numUsers = user.length,

 	for (vari i = 0; i<numUsers; i++){
 		resultsHTML += <div class="person-row">\
		<img src="imagenes/avatares/' + users[i].avatar +'" />\
		<div class="person-info">\
		<div>' + users[i].name + '</div>\
		<div>' + users[i].name + '</div></div>\
		<button>Add as friend</button>\
	</div>\':
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
],

