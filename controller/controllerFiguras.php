<?php
    require_once('/tdiw/tdiw-h11/public_html/model/model.php');
    $categoria = $_GET['categoria'];
    $admin = $_GET['admin'];
    function mostrarFiguras($n){

        $BDinstance = instanciaBD();
        $figuras = getFiguras ($BDinstance,$n);
        $data = array();

        while ($fila = mysqli_fetch_assoc($figuras)){
            $data[] = $fila;
        }
        return $data;
    }

    $grid = array(); //variable en la que meteremos el array que contiene las figuras que nos llega desde mostrar figuras
		$grid = mostrarFiguras($categoria);
		$i = 0;
		$size = 0;
		$size = count($grid);
    $fila = 0;
    $id = 0;
    echo"<ul>";
    while($i < $size){
        $fila = $grid[$i];
        $id = $fila["id"];
        $cat= $fila["category_id"];

        include('/tdiw/tdiw-h11/public_html/view/print.php');
    }
    echo"</ul>";
?>
