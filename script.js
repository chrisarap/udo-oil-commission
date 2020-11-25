function mostrarPestana(n){
	// el contenido se guarda en los elementos
	var pestana = document.getElementsByClassName("pestana");
	var contenido = document.getElementsByClassName("contenido");

	// se quitan las clases activas de los elementos anteriores
	for (var i = 0; i < pestana.length; i++) {
		if (pestana[i].className.includes("pestana_activa")) {
			pestana[i].className = pestana[i].className.replace("pestana_activa", "");
			contenido[i].className = contenido[i].className.replace("contenido_activo", "");
			break;
		}		
	}

	// se agregan las clases activas a los elementos actuales
	pestana[n].className += " pestana_activa";
	contenido[n].className += " contenido_activo";

	// se el contenido al elemento principal
	var principal = document.getElementById("principal");
	principal.innerHTML = contenido[n].innerHTML;
}