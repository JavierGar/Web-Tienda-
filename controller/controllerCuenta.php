<?php
        require_once('/tdiw/tdiw-h11/public_html/model/model.php');

        $user = $_COOKIE["user"];
        $BD=instanciaBD();
        $usuario = datos($BD,$user);
        $data=mysqli_fetch_assoc($usuario);

        include("/tdiw/tdiw-h11/public_html/view/cuenta.php");

  ?>
