<?php
    if(!isset($_COOKIE['admin'])) {
        header("location: ../index.php");
    }
    if($_COOKIE['admin'] == "notAdmin"){
        header("location: ../index.php");
    }
    require_once('/tdiw/tdiw-h11/public_html/model/model.php');
    include('/tdiw/tdiw-h11/public_html/view/headersinbarra.php');
    include('/tdiw/tdiw-h11/public_html/view/administracion.php');
?>
