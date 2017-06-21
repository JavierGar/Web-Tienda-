<?php
      session_start();
      
      $keyToDelete = $_GET['key'];
      if($_SESSION['carrito'][$keyToDelete] > 1){
          $_SESSION['carrito'][$keyToDelete]-=1;
      }else{
          unset($_SESSION['carrito'][$keyToDelete]);
      }

      header("Location: controllerCarrito.php");
      exit;
 ?>
