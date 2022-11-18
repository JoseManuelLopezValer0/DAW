<?php
/**
 * 
 * Documentacion:
 * 
 * @author: Jose Manuel
 * @version: 1.0
 */

function generarAbonos($numeroAbonos)
{
    $localidades = array();
    for ($i = 0; $i < $numeroAbonos; $i++) {
        do
            $n = rand(1,AFORO);
        while (in_array($n, $localidades));
        $localidades[] = $n;

    }
    return $localidades;
}

function clearData($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}