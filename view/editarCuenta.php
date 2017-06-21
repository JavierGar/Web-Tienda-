<?php
    printf("<form name=\"registro\" method=\"post\" >");
    printf("<label for=\"nom\">Nombre y apellidos:</label><br />");
    printf("<input type=\"text\" name=\"nom\" id=\"nom\" value= '%s' required pattern=\"[a-zA-Z]+[ ][a-zA-Z]+\"+/><br />",$data['nom']);
    printf("<label for=\"password\">Contraseña:</label><br/>");
    printf("<input type=\"password\" name=\"password\" id=\"password\" required pattern=\"[a-zA-Z0-9]+\" /><br />");
    printf("<label for=\"email\">Correo electronico:</label><br />");
    printf("<input type=\"email\" name=\"email\" id= \"email\" value= '%s' /><br />",$data['email']);
    printf("<label for=\"telefono\">Teléfono:</label><br />");
    printf("<input type=\"int\" name=\"telefono\" id=\"telefono\"  value= %d required pattern=\"[0-9]{9}\"+/><br />",$data['telefono']);
    printf("<label for=\"direccion\">Direccion:</label><br />");
    printf("<input type=\"text\" name=\"direccion\" id=\"direccion\"  value= '%s' required pattern=\"[A-Za-Z0-9]{1,30}\" /><br />", $data['direccion']);
    printf("<label for=\"poblacio\">Població:</label><br />");
    printf("<input type=\"text\" name=\"poblacio\" id=\"poblacio\" value= '%s' required pattern=\"[A-Za-z ]{1,30}\" /> <br />",$data['poblacion']);
    printf("<label for=\"postal\">Código Postal:</label><br />");
    printf("<input type=\"text\" name=\"postal\" id=\"postal\" required value= %d pattern=\"[0-9]{4}\"+/><br />",$data['codigopostal']);
    printf("<label for=\"tarjeta\">Número de tarjeta:</label><br/>");
    printf("<input type=\"int\" name=\"tarjeta\" id=\"tarjeta\"  value= %d required pattern=\"[0-9]{16}\"+/><br />",$data['targeta']);

    printf("<br/>");
    printf("<button name=\"boton_registrar\" type=\"submit\">Registrar</button>");
    printf("</form>");
?>
