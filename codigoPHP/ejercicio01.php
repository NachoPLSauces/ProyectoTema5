<?php
/*
 * @author: Nacho del Prado Losada
 * @since: 29/11/2020
 * Ejercicio: 1.Desarrollo de un control de acceso con identificación del usuario basado en la función header().
 */

//Si el usuario no se ha identificado se piden las creedenciales, si no son correctas se muestra el error
if ($_SERVER['PHP_AUTH_USER']!='admin' || $_SERVER['PHP_AUTH_PW']!='admin') {
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Usuario no reconocido!";
    exit;
}
//Si se han introducido correctamente las creedenciales, se muestra la página
else{
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
        header("Location: programa.php");
        ?>        
    </body>
</html>

<?php
}
?>