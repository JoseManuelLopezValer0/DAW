<?php
/**
 * 
 * Documentación
 * 
 * @Author: Jose Manuel
 * @Version: 1.0
 * 
 */

include 'lib/funciones.php';
include 'config/config.php';

// tabla de juego
$tablero = array();

// inicializamos el tablero
for ($i = 0; $i < filas; $i++) {
    for ($j = 0; $j < columnas; $j++) {
        $tablero[$i][$j] = 0;
    }
}

// colocamos las minas
for ($i = 0; $i < minas; $i++) {
    $fila = rand(0, filas - 1);
    $columna = rand(0, columnas - 1);
    $tablero[$fila][$columna] = 9;
}

// colocamos los números
for ($i = 0; $i < filas; $i++) {
    for ($j = 0; $j < columnas; $j++) {
        if ($tablero[$i][$j] != 9) {
            $tablero[$i][$j] = contarMinas($tablero, $i, $j);
        }
    }
}

// Contamos las minas
for ($i = 0; $i < filas; $i++) {
    for ($j = 0; $j < columnas; $j++) {
        if ($tablero[$i][$j] != 9) {
            $tablero[$i][$j] = contarMinas($tablero, $i, $j);
        }
    }
}

// Mostramos el tablero de juego, es una tabla de 10x10 con botones que al pulsarlos se ejecuta la función pulsar 
//cada botón tiene un id que es la fila y la columna concatenadas

echo "<table>";
for ($i = 0; $i < filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < columnas; $j++) {
        echo "<td><input type='button' id='$i$j' value=' ' onclick='pulsar($i,$j)'></td>";
    }
    echo "</tr>";
}
echo "</table>";