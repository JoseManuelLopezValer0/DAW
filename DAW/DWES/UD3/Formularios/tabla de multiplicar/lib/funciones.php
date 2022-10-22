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

function existeCoordenada($fila, $columna, $array): bool
{
    $existe = false;
    foreach ($array as $key => $value) {
        if (($value['f'] == $fila) and ($value['c'] == $columna)) {
            $existe = true;
        }
    }
    return $existe;
}
