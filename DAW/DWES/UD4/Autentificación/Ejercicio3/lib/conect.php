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

 // coneccion a la base de datos
function conect()
{
    $con = mysqli_connect("localhost", "root", "", "daw");
    if (!$con) {
        die("No se ha podido conectar a la base de datos");
    }
    return $con;
}
