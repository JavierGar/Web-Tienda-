<?php
    require_once('/tdiw/tdiw-h11/public_html/model/model.php');

    function mostrarFiguras($n){

        $BDinstance = instanciaBD();

        $figuras = getFiguras ($BDinstance,$n);
        $data = array();

        while ($fila = mysqli_fetch_assoc($figuras)){
            $data[] = $fila;
        }
        return $data;
    }


    function validarlogin(){
        $BDinstance=instanciaBD();
        $newuser = loggin($_REQUEST['email'],$_REQUEST['pasword']);

        if($newuser==1){
            require('../vista/AreaUsuario.php');
        }else{
            require('../vista/FalloRegistro.php');
        }
    }
    function devolverUsuarios(){
        $BDinstance =instanciaBD();
        $usuarios = devolverTodosUsuarios($BDinstance);
        echo"<ul>";
        while($fila = mysqli_fetch_assoc($usuarios)){
            echo"<li>";
            printf("nom:%s <br />", $fila["nom"]);
            printf("email:%s <br />", $fila["email"]);
            printf("pass:%s <br /><br />", $fila["password"]);
            echo"</li>";
        }
        echo"<ul>";
    }
    function detallesProducto($prodId){
            $BDinstance = instanciaBD();
            $producto = getProducto($BDinstance,$prodId);
            $productoArray = mysqli_fetch_assoc($producto);
            return $productoArray;
        }
?>
