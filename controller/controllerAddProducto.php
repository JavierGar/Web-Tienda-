
<?php
if(!isset($_COOKIE['admin'])) {
    header("location: ../index.php");
}
if($_COOKIE['admin'] == "notAdmin"){
    header("location: ../index.php");
}
require_once('/tdiw/tdiw-h11/public_html/model/model.php');
include("/tdiw/tdiw-h11/public_html/view/headersinbarra.php");
include("/tdiw/tdiw-h11/public_html/view/addProducto.php");

$carpeta = "../imagenes/figuras/";


if(isset($_POST["upload"])) {
  $archivo = $carpeta . basename($_FILES["fileToUpload"]["name"]);
  $noError = 1;
  $imageFileType = pathinfo($archivo,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false) {
        echo "El archivo es una imagen- " . $check["mime"] . ".";
        $noError = 1;
    } else {
        echo "El archivo no es una imagen.";
        $noError = 0;
    }

    if (file_exists($archivo)) {
        echo "El archivo ya existe.";
        $noError = 0;
    }
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "La imagen es muy grande.";
        $noError = 0;
    }
    if($imageFileType != "jpg" ) {
        echo "Error, el formato de la imagen no es .jpg.";
        $noError = 0;
    }
    if ($noError == 0) {
        echo "El archivo no se ha subido.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $archivo)) {
            echo "El archivo ". basename( $_FILES["fileToUpload"]["name"]). " se ha subido correctamente.";
            $nom= $_POST["nom"];
            $precio=$_POST["precio"];
            $descripcion=$_POST["message"];
            $category=$_POST["category"];
            echo"$category";
            $imagen= basename( $_FILES["fileToUpload"]["name"]);
            $temp = explode('.', $imagen);
            $ext  = array_pop($temp);
            $imagen= implode('.', $temp);
            $BDinstance = instanciaBD();
            $newuser = afegir($BDinstance,$nom,$precio,$descripcion,$imagen,$category);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


}
?>
