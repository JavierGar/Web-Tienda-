<?php
    require_once('/tdiw/tdiw-h11/public_html/model/model.php');

    function detallesProducto($prodId){
        $BDinstance = instanciaBD();
        $producto = getProducto($BDinstance,$prodId);
        $productoArray = mysqli_fetch_assoc($producto);
        return $productoArray;
    }

    include("/tdiw/tdiw-h11/public_html/view/headersinbarra.php");

    $prodId = $_GET['id'];
    $fila = detallesProducto($prodId);

    include("/tdiw/tdiw-h11/public_html/view/producto.php");

?>
