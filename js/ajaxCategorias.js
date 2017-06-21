function switchPanel ( panel, admin ){
	var xhttp;

	xhttp = new XMLHttpRequest();
	if(admin==1){
			var pagina = "./controller/controllerFiguras.php?";
	}else{
			var pagina = "../controller/controllerFiguras.php?";
	}
	var nombre = "categoria=";
	var nombre2 = "&admin=";
	var completa = pagina + nombre + panel + nombre2 + admin;
  xhttp.open("POST", completa, true);


	xhttp.send();

	xhttp.onreadystatechange = function(){
		if (xhttp.readyState == 4 && xhttp.status ==200)
		{
			document.getElementById("productos").innerHTML = xhttp.responseText;
		}
	}
}
