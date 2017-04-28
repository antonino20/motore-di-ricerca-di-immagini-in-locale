menu = document.getElementById('menu-vertical');
iconoMenu = document.getElementById('icono-menu');

iconoMenu.addEventListener("click", function(){
	console.log("prueba");
	listaMenu = document.getElementById('items');
	if (listaMenu.style.display == "block"){
		listaMenu.style.display="none";}
		else{listaMenu.style.display="block"}

})