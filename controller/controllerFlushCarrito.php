<?php
      session_start();

      foreach($_SESSION['carrito'] as $key => $value) {
          unset($_SESSION['carrito'][$key]);
      }

      header("Location: controllerCarrito.php");
      exit;
 ?>
