<head>
    <meta charset="utf-8">
    <title>Figuras</title>
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script src="../js/JButton.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
</head>
<body>
    <div id=barra>
        <ul>
            <li><a class="active" href="http://deic-dc0.uab.cat/~tdiw-h11/index.php"><img alt='' src='imagenes/house.png' height='20'></a></li>
            <li><a class="active" href="http://deic-dc0.uab.cat/~tdiw-h11/view/contacto.php">Contacto</a></li>
            <li><a class="active" href="http://deic-dc0.uab.cat/~tdiw-h11/view/sobrenosotros.php">Sobre Nosotros</a></li>

            <?php

                if(!isset($_COOKIE['user'])) {
                  echo"<li id='der'><a href='http://deic-dc0.uab.cat/~tdiw-h11/controller/controllerLogin.php'>Registrarse/Identificarse</a></li>";
                }else{
                    if($_COOKIE['admin'] == "admin" ) {
                        echo"<li><a href='http://deic-dc0.uab.cat/~tdiw-h11/controller/controllerAdministracion.php'>Administracion</a></li>";
                    }
                    session_start();
                    if(isset($_SESSION['carrito'])) {
                        include('/tdiw/tdiw-h11/public_html/controller/controllerAmount.php');
                        echo"<li id='der'><a href='http://deic-dc0.uab.cat/~tdiw-h11/controller/controllerCarrito.php'>$amount</a></li>";
                    }else{
                        $_SESSION['usuario'] = $_COOKIE["user"];
                        $_SESSION['carrito'] = array();
                        echo"<li id='der'><a href='http://deic-dc0.uab.cat/~tdiw-h11/controller/controllerCarrito.php'>0</a></li>";
                    }
                    echo"<li id='der'><a href='http://deic-dc0.uab.cat/~tdiw-h11/controller/controllerCarrito.php'><img alt='' src='imagenes/order-cart.gif' height='20'></a></li>";
                    echo"<li id='der'><a href='javascript:toggleDiv(\"MySpace\")'>Mi Cuenta</a></li>";
                    echo"<div id='MySpace'>";
                    echo"<li><a href='http://deic-dc0.uab.cat/~tdiw-h11/controller/controllerMostrarCompras.php'>Mis Compras</a></li>";
                    echo"<li><a href='http://deic-dc0.uab.cat/~tdiw-h11/controller/controllerCuenta.php'>Mi Cuenta</a></li>";
                    echo"</div>";
                }
                ?>
        </ul>
    </div>
<br>
<br>

<img src="imagenes/logo.png" alt="Logo"  id="titulo">

<br>
<br>

<form id="search">
<input type="text" name="search" placeholder="Search..">

</form>
<br>

<div id="subbarra"><!-- Defining the navigation menu -->
    <?php
        echo"<ul>";
        while($i < $size){
            $fila = $cat[$i];
            printf("<li><button type='button' onclick='switchPanel( %d, 1 )' >%s</button></li>" ,$fila['id'],$fila["Nom_categoria"]);
            ++$i;
        }
        echo"</ul>";
    ?>
</div>
<body>
