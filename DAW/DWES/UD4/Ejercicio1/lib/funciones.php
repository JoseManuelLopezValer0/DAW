<?php

/**
 * Docuemntacion:
 * 
 * Archivo de funciones del archivo php.
 * 
 * @author Jose Manuel Lopez Valero
 * @version 1.0
 * 
 */

//crear cookie
function crearCookie($nombre,$valor, $tiempo) {
    setcookie($nombre, $valor, time() + ($tiempo * 60));
}

//borrar cookie
function borrarCookie($nombre){
    setcookie($nombre, "", time() - 3600);
}

//mostrar cookie
function mostrarCookie($nombre){
    if (isset($_COOKIE[$nombre])) {
        echo "El valor de la cookie es: " . $_COOKIE[$nombre];
    } else {
        echo "La cookie no existe";
    }
}


