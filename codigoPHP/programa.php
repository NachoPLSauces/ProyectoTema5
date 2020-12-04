<?php
/*
 * @author: Nacho del Prado Losada
 * @since: 29/11/2020
 * Página a mostrar si el usuario se identifica correctamente en el ejercicio01
 */

// Recuperamos la información de la sesión
session_start();

//Si no ha introducido unas creedenciales validas no se muestra la página
//Se comprueba que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) {
    header('Location: ./ejercicio02.php');
}

//Si pulsa el botón Salir se le dirige al índice del Tema 5 y se cierra la sesión
//Si pulsa el botón Detalle se le dirige al ejercicio00
if (isset($_REQUEST['salir'])) {
    session_unset();
    header('Location: ../indexProyectoTema5.php');
    
} else if (isset($_REQUEST['detalle'])) {
    header('Location: ./ejercicio00.php');
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
        <form>
            <h3>Bienvenido <?php echo $_SESSION['usuario']; ?></h3>
            <form name="input" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="submit" name="detalle" value="Detalle"/>
                <input type="submit" name="salir" value="Salir"/>
            </form> 
        </form>      
    </body>
</html>
