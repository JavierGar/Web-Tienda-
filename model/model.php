<?php

    function instanciaBD(){

        $server = "localhost";
        $username = "tdiw-h11";
        $password = "ineeyeet";
        $dbname = "tdiw-h11";
        $BD = mysqli_connect($server, $username, $password, $dbname);
        if ($BD->connect_error) {
          die("Connection failed: " . $BD->connect_error);
        }
        return $BD;
    }

    function getFiguras($BD,$n){

        $query = "SELECT `id`,`nombre` , `imagen` , `precio`,`category_id` FROM `product` WHERE `category_id` = $n";
        $result = mysqli_query($BD,$query);

        return $result;
    }
    function login($BD, $email){
      $email = "'" . $email . "'";
      $query = "SELECT * FROM `Client` WHERE `email` = $email";
      $result = mysqli_query($BD,$query);
      return $result;
    }
    function datos($BD, $user){
      $user="'".$user."'";
      $query = "SELECT * FROM `Client` WHERE `usuario` = $user";
      $result = mysqli_query($BD,$query);
      return $result;
    }
    function afegir($BD,$nom,$precio,$descripcion,$imagen,$category){
      $stmt= $BD->prepare("INSERT INTO product (`nombre`,`imagen`,`precio`,`descripcion`,`category_id`) VALUES(?,?,?,?,?)");
      $stmt->bind_param("ssisi",$nom,$imagen,$precio,$descripcion,$category);
      $stmt->execute();
      $stmt->close();

    }


    function registrar($BD,$nom,$user,$password,$email,$telefono,$direccion,$poblacio,$postal,$tarjeta){
      $stmt= $BD->prepare("INSERT INTO Client (`nom`,`usuario`,`password`,`email`,`telefono`,`direccion`,`poblacion`,`codigopostal`,`targeta`) VALUES(?,?,?,?,?,?,?,?,?)");
      $stmt->bind_param("ssssissis",$nom,$user,$password,$email,$telefono,$direccion,$poblacio,$postal,$tarjeta);
      $stmt->execute();
      $stmt->close();

    }
    function modificar($BD,$nom,$user,$password,$email,$telefono,$direccion,$poblacio,$postal,$tarjeta){
      $user="'".$user."'";
      $query = ("UPDATE Client SET `nom`='$nom', `password`='$password',`email`='$email',`telefono`='$telefono',`direccion`='$direccion',`poblacion`='$poblacio',`codigopostal`='$postal',`targeta`='$tarjeta' WHERE `usuario`=$user");
      $result = mysqli_query($BD,$query);
      //  $stmt= $BD->prepare("UPDATE Client (`nom`,`usuario`,`password`,`email`,`telefono`,`direccion`,`poblacion`,`codigopostal`,`targeta`) SET(?,?,?,?,?,?,?,?,?) WHERE usuario = $user");
      // $stmt->bind_param("ssssissis",$nom,$user,$password,$email,$telefono,$direccion,$poblacio,$postal,$tarjeta);
      //  $stmt->execute();
    }

    function compra ($BD,$productos,$total,$user){
      $user="'".$user."'";
      $query= "INSERT INTO sale (`id`,`Total`,`usuario_sale`) VALUES (NULL,$total, $user);";
      $result = mysqli_query($BD,$query);
      $saleID = mysqli_insert_id($BD);

      foreach($productos as $fila => $value){
        $id = $value['id'];
        $cantidad = $value['cantidad'];
        $query= "INSERT INTO Product_sales (`id_producte`,`id_sale`,`Cantidad`) VALUES ($id,$saleID,$cantidad)";
        $result = mysqli_query($BD,$query);
      }

    }

    function devolverTodosUsuarios($BD){
        $query = "SELECT * FROM `Client` ";
        $result = mysqli_query($BD,$query);
        return $result;
    }


    function getProducto($BD,$id){
        $query = "SELECT * FROM `product` WHERE `id` = $id";
        $result = mysqli_query($BD,$query);

        return $result;
    }
    function getCategorias ($BD){
        $query='SELECT `Nom_categoria`,`id` FROM `category`';
        $result=mysqli_query($BD,$query);

        return $result;
    }

    function devolverCompras($BD, $user){
        $user="'".$user."'";
        $query = "SELECT sale.*, Product_sales.*, product.* FROM sale, Product_sales, product WHERE sale.id = Product_sales.id_sale AND sale.usuario_sale = $user AND Product_sales.id_producte = product.id";
        $result=mysqli_query($BD,$query);
        return $result;
    }
	function devolverTodasCompras($BD){
        $query = "SELECT sale.*, Product_sales.*, product.* FROM sale, Product_sales, product WHERE sale.id = Product_sales.id_sale  AND Product_sales.id_producte = product.id";
        $result=mysqli_query($BD,$query);
        return $result;
    }

  ?>
