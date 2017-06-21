<?php
    if(!isset($_COOKIE[$cookie_name])) {
        $(".actions").html("include('headersinbarra.php');");
        echo"<a href='controller/controllerProducto.php?id=$id'> Detalles </a>";
        echo"<a href='view/Login.php>Añadir al carro</a>";
    }
?>
