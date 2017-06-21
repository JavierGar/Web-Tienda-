<?php
				echo"<li>";
						if($admin == 1){
							printf("<div class='imagen'><a href='controller/controllerProducto.php?id=$id'><img src='imagenes/figuras/%s.jpg'></a></div>",$fila['imagen']);
						}else{
							  printf("<div class='imagen'><a href='controllerProducto.php?id=$id'><img src='../imagenes/figuras/%s.jpg'></a></div>",$fila['imagen']);
						}
						echo"<div class='info'>";
								printf("<a class='title'>%s</a>", $fila["nombre"]);
								echo"<div class='price'>";
										printf("<p>%d EUR</p>", $fila["precio"]);
								echo"</div>";
								echo"<div class='actions'>";
								if(!isset($_COOKIE["user"])) {
						      		echo"<a href='controller/controllerProducto.php?id=$id'> Detalles </a>";
									if($admin==1){
									echo"<a href='controller/controllerLogin.php'> Añadir al carro </a>";
									}else{
									echo"<a> Modificar </a>";
									}

							    }else{
									if($admin==1){
										echo"<a href='controller/controllerProducto.php?id=$id'> Detalles </a>";
										echo"<a href='controller/controllerAddCart.php?prodId=$id'> Añadir al carro </a>";
									}else{
										echo"<a href='controllerProducto.php?id=$id'> Detalles </a>";
										echo"<a> Modificar </a>";
									}

							    }
								echo"</div>";
						echo"</div>";
				echo"</li>";
				++$i;
?>
