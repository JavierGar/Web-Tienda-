<?php
    require_once('/tdiw/tdiw-h11/public_html/model/model.php');
    $usuario = datos($BD,$user);
    $data=mysqli_fetch_assoc($usuario);
    $name = $email = $password = $telefono = $direccion = $poblacion = $postal = $tarjeta = $user= "";

    if(isset($_POST['boton_registrar'])){
        $name = test_input($_POST["nom"]);
        $password = $_POST["password"];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $email = test_input($_POST["email"]);
        $telefono = test_input($_POST["telefono"]);
        $direccion = test_input($_POST["direccion"]);
        $poblacion = test_input($_POST["poblacio"]);
        $postal = test_input($_POST["postal"]);
        $tarjeta = test_input($_POST["tarjeta"]);

        $user = $_COOKIE['user'];
        $BDinstance = instanciaBD();
        $newuser = modificar($BDinstance,$name,$user,$password,$email,$telefono,$direccion,$poblacion,$postal,$tarjeta);
        $message = "Datos modificados";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("refresh:1; url=../index.php");
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    include('/tdiw/tdiw-h11/public_html/view/editarCuenta.php');
?>
