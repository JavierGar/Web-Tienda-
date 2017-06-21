<?php
    if($fila["id_sale"] != $last){
        echo"</br>";
        echo"-------------------------------------------------------------";
        echo"</br>";
        printf("Nº de referencia de la venta %d",$fila["id_sale"]);
        echo"</br>";
        printf("Usuario: %s",$fila["usuario_sale"]);
        echo"</br>";
        printf("Coste total: %s",$fila["Total"]);
        echo"</br>";
        echo"</br>";
    }
    printf("Producto: %s",$fila["nombre"]);
    echo"  |  ";
    printf("Cantidad %d",$fila["Cantidad"]);
    echo"  |  ";
    printf("Precio por unidad %d EUR",$fila["precio"]);
    echo"</br>";

    $last = $fila["id_sale"];

?>
