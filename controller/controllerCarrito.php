<?php
    require_once('/tdiw/tdiw-h11/public_html/model/model.php');
    include('/tdiw/tdiw-h11/public_html/view/headersinbarra.php');

    if(isset($_SESSION['carrito'])) {
        $i = 0;
        $data = array();
        $total = 0;
        foreach($_SESSION['carrito'] as $key => $value) {
            $BDinstance = instanciaBD();
            $result = getProducto($BDinstance, $key);
            $fila = mysqli_fetch_assoc($result);
            $fila["cantidad"] = $value;
            $data[] = $fila;
            $total += $fila["precio"] * $fila["cantidad"];
        }

        include('/tdiw/tdiw-h11/public_html/view/carrito.php');    
    }else{
        include('/tdiw/tdiw-h11/public_html/view/emptyCart.php');
    }
 ?>
