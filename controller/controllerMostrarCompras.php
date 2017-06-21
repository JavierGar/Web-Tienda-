<?php

    require_once('/tdiw/tdiw-h11/public_html/model/model.php');
    include("../view/headersinbarra.php");

    echo"<div id=\"cuenta\"><p>";
    $BDinstance = instanciaBD();
    $result = devolverCompras($BDinstance,$_COOKIE['user']);
    $last = 0;
    while ($fila = mysqli_fetch_assoc($result)){
        include("../view/mostrarCompras.php");
    }
    echo"</p></div>";

?>
