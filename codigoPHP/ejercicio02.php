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

    /*try{
        //Instanciar un objeto PDO y establecer la conexión con la base de datos
        $miDB = new PDO(DSN, USER, PASSWORD);

        //Establecer PDO::ERRMODE_EXCEPTION como valor del atributo PDO::ATTR_ERRMODE
        $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //Almaceno la consulta a sql en una variable
        $sql = "SELECT usuario FROM usuarios WHERE usuario={$_SERVER['PHP_AUTH_USER']} AND contrasena="
    */
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