<?php
		require_once('/tdiw/tdiw-h11/public_html/model/model.php');
		$name = $email = $password = $telefono = $direccion = $poblacion = $postal = $tarjeta = $user= "";

		if(isset($_POST['boton_registrar'])){
				$name = test_input($_POST["nom"]);
				$user = test_input($_POST["user"]);
				$password = $_POST["password"];
				$password = password_hash($password, PASSWORD_DEFAULT);
				$email = test_input($_POST["email"]);
				$telefono = test_input($_POST["telefono"]);
				$direccion = test_input($_POST["direccion"]);
				$poblacion = test_input($_POST["poblacio"]);
				$postal = test_input($_POST["postal"]);
				$tarjeta = test_input($_POST["tarjeta"]);

				$BDinstance = instanciaBD();
				$newuser = registrar ($BDinstance,$name,$user,$password,$email,$telefono,$direccion,$poblacion,$postal,$tarjeta);

				if($newuser == NULL){
						echo "<script type='text/javascript'>alert('Usuario registrado');</script>";
				}


		}

    if(isset($_POST['submit_login'])){
    		$email =  test_input($_POST["email"]);
				$password = test_input($_POST["password"]);
				$BDinstance = instanciaBD();
				$consulta = login($BDinstance,$email);
				$fila = mysqli_fetch_assoc($consulta);

				if (password_verify( $password , $fila['password'])){
						$name = $fila['usuario'];
						setcookie("user", $name , time() + (86400 * 30), "/"); // 86400 = 1 day
						setcookie("admin", "notAdmin" , time() + (86400 * 30), "/"); // 86400 = 1 day
						session_start();
						$_SESSION['usuario'] = $_COOKIE["user"];
						$_SESSION['carrito'] = array();

						if($fila["isAdmin"]==1){
								setcookie("admin", "admin" , time() + (86400 * 30), "/"); // 86400 = 1 day
								if(!isset($_COOKIE['admin'])) {
											echo "Cookie named Admin is not set!";
								}
						}
						header("location: ../index.php");
						exit;
				}else{
						$message = "Contraseña incorrecta";
						echo "<script type='text/javascript'>alert('$message');</script>";
				}
    }

		function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
			 	return $data;
		 }

		 include('/tdiw/tdiw-h11/public_html/view/login.php');

?>
