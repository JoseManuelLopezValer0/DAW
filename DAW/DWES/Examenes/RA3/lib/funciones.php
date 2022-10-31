<?php

/**
 * 
 * Archivo de funciones
 * 
 * @author: Jose Manuel
 * @version: 1.0
 * 
 */

// proceso aleatorio que carga en un array las localidades ocupadas por los socios habiendo 4 zonas con 100 localidades cada una y el numero de asociados ocupados es definido en config.php como NumeroAbonos
function localidadesOcupadas()
{
    $localidadesSocios = array();
    for ($i = 0; $i < NumeroAbonos; $i++) {
        $localidadesSocios[] = rand(1, 400);
    }
    return $localidadesSocios;
}
