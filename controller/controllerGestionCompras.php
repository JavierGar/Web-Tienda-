<?php
        require_once('/tdiw/tdiw-h11/public_html/model/model.php');

        echo"<div id=\"cuenta\"><p>";

        $BDinstance = instanciaBD();
        $result = devolverTodasCompras($BDinstance);
        $last = 0;

        while ($fila = mysqli_fetch_assoc($result)){
          include("../view/printGestionCompras.php");
        }

        echo"</p></div>";


 ?>
