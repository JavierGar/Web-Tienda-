<?php
        require_once('/tdiw/tdiw-h11/public_html/model/model.php');
        include('/tdiw/tdiw-h11/public_html/view/headersinbarra.php');

        $i = 0;
        $data = array();
        $total = 0;
        $user = $_COOKIE['user'];
        $BDinstance = instanciaBD();
        if(!empty($_SESSION['carrito'])){
            foreach($_SESSION['carrito'] as $key => $value) {
                $result = getProducto($BDinstance, $key);
                $fila = mysqli_fetch_assoc($result);
                $fila["cantidad"] = $value;
                $data[] = $fila;
                $total += $fila["precio"] * $fila["cantidad"];
            }
            compra($BDinstance,$data,$total,$user);
            foreach($_SESSION['carrito'] as $key => $value) {
                unset($_SESSION['carrito'][$key]);
            }
        }

        include('/tdiw/tdiw-h11/public_html/view/agradecimiento.php');
        header( "refresh:5; url=../index.php" );

 ?>
