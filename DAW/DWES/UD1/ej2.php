<?php
/**Bloque de documentacion
 * Ejercicio 2
 * @author Jose Manuel Lopez Valero
 */
$month = 1;
$ndays;

switch ($month) {
    case '0':
    case '2':
    case '4':
    case '6':
    case '7':
    case '9':
    case '11':
        $ndays = "31";
        break;
    
    case '3':
    case '5':
    case '8':
    case '10':
    case '12':
        $ndays = "30";
        break;
    case '1':
        $ndays = "29
        ";
        break;
}

echo("El mes tiene" + $ndays);