<?php
    require_once("/tdiw/tdiw-h11/public_html/controller/controller.php");
    include("headersinbarra.php");
?>

    <section id="entrar">
      	<div id="login">
            <form name="login" method="post">
          			<p>Login</p>
                <label for="email">Correo electronico:</label><br />
          			<input id="email" name="email" type="email" /><br />
          			<label for="pass">Tu password:</label><br />
                <input id="password"  name="password" type="password" required pattern="[a-zA-Z0-9]+" /><br />
          			<input name="submit_login" type="submit" value ="Login" />
      		  </form>
      	</div>
        <div id="registro">
            <form name="registro" method="post" >
                <p>Registre</p>
            		<label for="nom">Nombre y apellidos:</label><br />
                <input type="text" name="nom" id="nom" required pattern="[a-zA-Z]+[ ][a-zA-Z]+"+/><br />
            		<label for="user">Nombre de Usuario:</label><br />
                <input type="text" name="user" id= "user" required pattern="[a-zA-Z0-9]+"/><br />
            		<label for="password">Contraseña:</label><br/>
                <input type="password" name="password" id="password" required pattern="[a-zA-Z0-9]+" /><br />
            		<label for="email">Correo electronico:</label><br />
                <input type="email" name="email" id= "email"  /><br />
            		<label for="telefono">Teléfono:</label><br />
                <input type="int" name="telefono" id="telefono" required pattern="[0-9]{9}"+/><br />
                <label for="direccion">Direccion:</label><br />
                <input type="text" name="direccion" id="direccion" required pattern="[A-Za-Z0-9]{1,30}" /><br />
                <label for="poblacio">Població:</label><br />
                <input type="text" name="poblacio" id="poblacio" required pattern="[A-Za-z ]{1,30}" /> <br />
            		<label for="postal">Código Postal:</label><br />
                <input type="text" name="postal" id="postal" required pattern="[0-9]{4}"+/><br />
            		<label for="tarjeta">Número de tarjeta:</label><br />
                <input type="int" name="tarjeta" id="tarjeta" required pattern="[0-9]{16}"+/><br />
                <br/>
                <button name="boton_registrar" type="submit">Registrar</button>
            </form>
        </div>
    </section>
