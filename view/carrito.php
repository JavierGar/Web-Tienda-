<div id="subbarra">
    <ul>
        <li><button type="button">Carrito</button></li>
    </ul>
</div>
    <div id= "main">
        <section id= "content">
            <div id= "productos">
                <ul>
                    <?php
                        foreach($data as $fila => $value){
                    				echo"<li>";
                                printf("<div class='imagen'><a href='controllerProducto.php?id=%d'><img src='../imagenes/figuras/%s.jpg'></a></div>",$value['id'],$value['imagen']);
                        						echo"<div class='info'>";
                        								printf("<a class='title'>%s</a>", $value["nombre"]);
                        								echo"<div class='price'>";
                        										printf("<p>%d EUR</p>", $value["precio"]);
                        								echo"</div>";
                        								echo"<div class='actions'>";
                                            printf("<a > Cantidad: %d </a>", $value['cantidad']);
                                            printf("<a href='controllerEliminarProductoCarrito.php?key=%d'> Eliminar </a>",$value["id"]);
                            								echo"</div>";
                        						    echo"</div>";
                    				echo"</li>";
                    		}
                    ?>
              </ul>
            </div>
        </section>
      </div>
      <div id="subbarra">
          <ul>
            <?php
              echo"<li><button type='button'>Precio total de compra = $total EUR</button></li>";
              ?>
          </ul>
      </div>
      <div id="subbarra">
          <div id="select">
          <ul>
          <?php
              if($total > 0) {
                  echo"<li><a href='../controller/controllerCompra.php'> Confirmar compra </a></li>";
                  echo"<li><a href='../controller/controllerFlushCarrito.php'> Vaciar Carrito </a></li>";
              }
          ?>
          </ul>
          </div>
      </div>
