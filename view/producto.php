<?php
    echo"<div id='pagProducto'>";
    echo"<table><tr>";
    printf("<td rowspan=3 id='imagenProd'><img src='../imagenes/figuras/%s.jpg'></td>",$fila['imagen']);
    printf("<td>%s</td>",$fila['nombre']);
    echo"</tr><tr>";
    printf("<td>%d €</td>",$fila['precio']);
    echo"</tr><tr>";
    printf("<td>%s</td>",$fila['descripcion']);
    echo"</tr></table>";
    echo"<div id='carroProducto'>";
    if(!isset($_COOKIE["user"])) {
      echo"<a href='controllerLogin.php' >Añadir al carro</a>";
    }else{
      printf("<a href='controllerAddCart.php?prodId=%d'> Añadir al carro </a>",$prodId);
    }
    echo"</div>";
?>
