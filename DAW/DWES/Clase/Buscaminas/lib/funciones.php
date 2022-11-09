<?php
/**
 * Documentación
 * 
 * @Author: Jose Manuel
 * @Version: 1.0
 * 
 */

 function contarMinas($matriz, $fila, $columna) {
    $minas = 0;
    for ($i = $fila - 1; $i <= $fila + 1; $i++) {
        for ($j = $columna - 1; $j <= $columna + 1; $j++) {
            if ($i >= 0 && $i < filas && $j >= 0 && $j < columnas) {
                if ($matriz[$i][$j] == 9) {
                    $minas++;
                }
            }
        }
    }
    return $minas;
}

function pulsar($fila, $columna) {
    global $tablero;
    if ($tablero[$fila][$columna] == 9) {
        echo "<script>alert('Has perdido')</script>";
        echo "<script>location.href='index.php'</script>";
    } else {
        echo "<script>document.getElementById('$fila$columna').value = $tablero[$fila][$columna]</script>";
        echo "<script>document.getElementById('$fila$columna').disabled = true</script>";
    }
}