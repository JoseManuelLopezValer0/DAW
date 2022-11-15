<?php

/**
 * Documentación
 * 
 * @Author: Jose Manuel
 * @Version: 1.0
 * 
 */
function crearTablero($filas, $columnas, $minas)
{
    $tablero = array();
    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            $tablero[$i][$j] = 0;
        }
    }

    return $tablero = ponerNumeros(ponerMinas($tablero, $minas));
}
function contarMinas($tablero, $fila, $columna)
{
    $filas = count($tablero);
    $columnas = count($tablero[0]);
    $minas = 0;
    for ($i = $fila - 1; $i <= $fila + 1; $i++) {
        for ($j = $columna - 1; $j <= $columna + 1; $j++) {
            if ($i >= 0 && $i < $filas && $j >= 0 && $j < $columnas) {
                if ($tablero[$i][$j] == 9) {
                    $minas++;
                }
            }
        }
    }

    return $minas;
}
function ponerMinas($tablero, $minas)
{
    $filas = count($tablero);
    $columnas = count($tablero[0]);
    $i = 0;
    while ($i < $minas) {
        $fila = rand(0, $filas - 1);
        $columna = rand(0, $columnas - 1);
        if ($tablero[$fila][$columna] != 9) {
            $tablero[$fila][$columna] = 9;
            $i++;
        }
    }
    return $tablero;
}
function ponerNumeros($tablero)
{
    $filas = count($tablero);
    $columnas = count($tablero[0]);
    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            if ($tablero[$i][$j] != 9) {
                $tablero[$i][$j] = contarMinas($tablero, $i, $j);
            }
        }
    }
    return $tablero;
}
function mostrarTablero($tablero)
{
    $filas = count($tablero);
    $columnas = count($tablero[0]);
    echo "<table>";
    for ($i = 0; $i < $filas; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $columnas; $j++) {
            echo "<td><a name='" . $tablero[$i][$j] . "'href=''> " . $tablero[$i][$j] . " </a></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

