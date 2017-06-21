function switchMenu ( menu ){
	var xhttp;

	xhttp = new XMLHttpRequest();
  if (menu == 1){
	  var pagina = "../controller/controllerGestionProductos.php";
  }else{
    var pagina = "../controller/controllerGestionCompras.php";
  }
  xhttp.open("POST", pagina, true);
	xhttp.send();

	xhttp.onreadystatechange = function(){
		if (xhttp.readyState == 4 && xhttp.status ==200)
		{
			document.getElementById("gestion").innerHTML = xhttp.responseText;
		}
	}
}
