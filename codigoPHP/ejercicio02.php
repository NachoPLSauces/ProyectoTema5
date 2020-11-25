<?php
/*
 * @author: Nacho del Prado Losada
 * @since: 25/11/2020
 * Ejercicio: 2.Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO).
 */

//Si el usuario no se ha identificado se piden las creedenciales
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Usuario no reconocido!";
    exit;
}
//Una vez se han introducido se comprueban con la base de datos
else{
    //Llamada al fichero de almacenamiento de consantes en PDO
    require_once '../config/confDBPDO.php';

    //Variable que indica si la transacción se ha realizado correctamente
    $transaccionOK = true;
    
    
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
        echo 'Nombre de usuario: '.$_SERVER['PHP_AUTH_USER']."<br>";
        echo 'Contraseña: '.$_SERVER['PHP_AUTH_PW']."<br>";
        ?>        
    </body>
</html>

<?php
}
?>