<?php
    require_once('/tdiw/tdiw-h11/public_html/model/model.php');
    function mostrarheader(){
        $BDinstance = instanciaBD();
        $header = getcategorias($BDinstance);
        $dataHeader = array();
        while($opcion = mysqli_fetch_assoc($header)){
            $dataHeader[] = $opcion;
        }
        return $dataHeader;
    }
    $cat = array();
    $i = 0;
    $cat = mostrarheader();
    $size = count($cat);
    
    include('/tdiw/tdiw-h11/public_html/view/header.php');
?>
