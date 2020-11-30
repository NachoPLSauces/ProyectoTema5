<?php
/*
 * @author: Nacho del Prado Losada
 * @since: 29/11/2020
 * Página a mostrar si el usuario se identifica correctamente en el ejercicio01
 */

//Si pulsa el botón Salir se le dirige al índice del Tema 5
//Si pulsa el botón Detalle se le dirige al ejercicio00
if (isset($_REQUEST['salir'])) {
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
            <h3>Datos introducidos correctamente</h3>
            <form name="input" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="submit" name="detalle" value="Detalle"/>
                <input type="submit" name="salir" value="Salir"/>
            </form> 
        </form>      
    </body>
</html>
