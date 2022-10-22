<?php

/**
 * 
 * Documentación:
 * 
 * @autor: Jose Manuel Lopez Valero
 * @version: 1.0
 * 
 */
//contador que indica la cantodad de veces que el usuariob ha cargado la pagina con sesiones si pasa 5 segundos sin recargar se borra la sesion
$contador = 0;
session_start();
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
} else {
    $_SESSION['contador']++;
}
//se muestra la sesion
echo "El contador de SESSION es: " . $_SESSION['contador'];
//se guarda la hora de la ultima vez que se cargo la pagina
$_SESSION['hora'] = time();
//si han pasado 5 segundos se borra la sesion con 5 segundos de delay
//delay de 5 segundos

if (time() == $_SESSION['hora'] + 5) {
   session_destroy();
    echo "La sesion ha caducado";
}

//mostar el tiempo que ha pasado desde la ultima vez que se cargo la pagina
echo "<p>Tiempo desde la ultima vez que se cargo la pagina: " . (time() - $_SESSION['hora']);
//mostar time
//mostar sesion hora
echo "<p>Session hora: " . $_SESSION['hora'];
echo "<p>Time: " . time();


// boton para borrar la sesion
echo "<form action='index.php' method='post'>";
echo "<input type='submit' name='borrar' value='Borrar sesion'>";
echo "</form>";
//si se pulsa el boton borrar se borra la sesion
if (isset($_POST['borrar'])) {
    session_destroy();
    header("Location: index.php");
}

?>  
