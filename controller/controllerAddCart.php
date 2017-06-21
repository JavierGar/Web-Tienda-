<?php
    session_start();

    $prodId = $_GET['prodId'];

    if(array_key_exists($prodId,$_SESSION['carrito'])){
        $_SESSION['carrito'][$prodId]+=1;
    }else{
        $_SESSION['carrito'][$prodId]=1;
    }
    
    echo"Producto añadido, redirigiendo.";
    header("Location: /~tdiw-h11/index.php");
    exit;

 ?>
