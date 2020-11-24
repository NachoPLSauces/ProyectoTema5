<?php
    /*
     * @author: Nacho del Prado Losada
     * @since: 24/11/2020
     * Ejercicio: 1.Desarrollo de un control de acceso con identificación del usuario basado en la función header()
     * 
     */

     if($_SERVER['PHP_AUTH_USER']!='admin' || $_SERVER['PHP_AUTH_PW']!='admin'){
         header('WWW-Authenticate: Basic Realm="Contenido restringido"');
         header('HTTP/1.0 401 Unauthorized');
         echo "Usuario no reconocido!";
         exit;
     }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicios Tema 5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>   
        <?php
        echo "Nombre de usuario: ".$_SERVER['PHP_AUTH_USER']."<br>";
        echo "Contraseña: ".$_SERVER['PHP_AUTH_PW']."<br>";
        ?>
        
    </body>
</html>


