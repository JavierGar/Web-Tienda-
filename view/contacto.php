<?php
    include("headersinbarra.php");
?>
<br>
<br>

<img src="../imagenes/logo.png" alt="Logo"  id="titulo">

<br>
<br>

<div id="contact"><h1> Contacta con nosotros </h1>
    <p>Nos encantaría resolver las dudas que puedas tener. Si quieres contactar con nosotros, rellena los campos inferiores con la información correspondiente y el mensaje que nos quieres enviar</p>
    <div id="form">
        <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
        <label for="name">Tu nombre:</label><br />
        <input id="name" class="input" name="name" type="text" value="" size="50" /><br />
        <label for="email">Tu email:</label><br />
        <input id="email" class="input" name="email" type="text" value="" size="50" /><br />
        <label for="message">Tu mensaje:</label><br />
        <textarea id="message" class="input" name="message" rows="12" cols="50"></textarea><br />
        <input id="submit_button" type="submit" value="Enviar mensaje" />
        </form>
    </div>
</div>
