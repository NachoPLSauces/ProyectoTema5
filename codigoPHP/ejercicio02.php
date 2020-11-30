<?php
/*
 * @author: Nacho del Prado Losada
 * @since: 30/11/2020
 * Ejercicio: 2.Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO).
 */

//Llamada al fichero de almacenamiento de consantes en PDO
require_once '../config/confDBPDO.php';

//Si el usuario no se ha identificado se piden las creedenciales
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}
//Una vez se han introducido se comprueban con la base de datos
try{
    //Instanciar un objeto PDO y establecer la conexión con la base de datos
    $miDB = new PDO(DSN, USER, PASSWORD);

    //Establecer PDO::ERRMODE_EXCEPTION como valor del atributo PDO::ATTR_ERRMODE
    $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //Almaceno la consulta a sql en una variable
    $sql = "SELECT CodUsuario, Password FROM usuarios WHERE CodUsuario=:CodUsuario";
    //Preparo la consulta
    $consulta = $miDB->prepare($sql);
    $consulta->bindParam(":CodUsuario", $_SERVER['PHP_AUTH_USER']);
    $consulta->execute();
    
    if($consulta->rowCount()>0){
        //Se obtiene el primer registro
        $registro = $consulta->fetchObject();
        
        //Se encripta el usuario junto con la contraseña y se almacena en una variable
        $password = hash("sha256", $_SERVER['PHP_AUTH_USER'].$_SERVER['PHP_AUTH_PW']);
        
        if($registro->CodUsuario==$_SERVER['PHP_AUTH_USER'] && $registro->Password==$_SERVER['PHP_AUTH_PW']){
            header("Location: programa.php");
            exit;
        }
    }
} catch (PDOException $pdoe){
    echo "<p style='color: red'>ERROR: " . $pdoe->getMessage() . "</p>";
} finally {
    unset($miDB);
}
?>