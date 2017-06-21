<div id="subbarra"><!-- Defining the navigation menu -->
<?php
    require_once('/tdiw/tdiw-h11/public_html/model/model.php');

    function mostrarCategorias(){
        $BDinstance = instanciaBD();
        $header = getcategorias($BDinstance);
        $dataHeader = array();
        while($opcion = mysqli_fetch_assoc($header)){
            $dataHeader[] = $opcion;
        }
        return $dataHeader;
    }
    $cat = array();
    $i = 0;
    $cat = mostrarCategorias();
    $size = count($cat);

    include('/tdiw/tdiw-h11/public_html/view/add.php');

    echo"<ul>";

    while($i < $size){
        $fila = $cat[$i];
        printf("<li><button type='button' onclick='switchPanel( %d, 2 )' >%s</button></li>" ,$fila['id'],$fila["Nom_categoria"]);
        ++$i;
    }
    echo"</ul>";
?>
</div>
<div id= "main">
    <section id= "content">
        <div id= "productos">

        </div>
    </section>
</div>
