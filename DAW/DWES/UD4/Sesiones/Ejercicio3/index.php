<?php

/**
 * 
 * Documentación:
 * 
 * @autor: Jose Manuel Lopez Valero
 * @version: 1.0
 * 
 */
//Buscaminas

//Creamos la matriz
$matriz = array();
//Creamos la matriz de 10x10
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $matriz[$i][$j] = 0;
    }
}

//Creamos las minas
for ($i = 0; $i < 10; $i++) {
    $minas = rand(0, 9);
    $matriz[$minas][$minas] = 1;
}

//Mostramos la matriz con las minas
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        if ($matriz[$i][$j] == 1) {
            echo "<img src='mina.png'>";
        } else {
            echo "<img src='celda.png'>";
        }
    }
    echo "<br>";
}
