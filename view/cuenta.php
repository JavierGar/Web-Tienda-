<?php
    include("headersinbarra.php");
?>

<div id="cuenta">
    <?php
        printf("<p> Nombre de usuario: %s<br />", $data['usuario']);
        printf(" Nombre :%s<br />", $data['nom']);
        printf(" Email:%s<br />", $data['email']);
        printf(" Telefono:%d<br />", $data['telefono']);
        printf(" Direccion:%s<br />", $data['direccion']);
        printf(" Poblacion:%s<br />", $data['poblacion']);
        printf(" Codigo Postal:%d<br /></p>", $data['codigopostal']);
        printf("<li><button type='button'  onclick='javascript:toggleDiv(\"form\")' >Editar</button></li>");
    ?>
    <div id="form">
    <?php
        include("/tdiw/tdiw-h11/public_html/controller/controllerModificar.php");
    ?>


    </div>
</div>
