<?php

/**
 * 
 * Documentación
 * 
 * @Author: Jose Manuel
 * @Version: 1.0
 * 
 */

include 'config/config.php';
include 'lib/funciones.php';

session_start();

if ($_SESSION['tablero'] == null) {
    $_SESSION['tablero'] = crearTablero(filas, columnas, minas);
    $_SESSION['minas'] = minas;
    $_SESSION['vsisible'];
} else {
    $tablero = $_SESSION['tablero'];
    $minas = $_SESSION['minas'];
}

if (isset($_GET['fila']) && isset($_GET['columna'])) {
    $fila = $_GET['fila'];
    $columna = $_GET['columna'];
    if ($tablero[$fila][$columna] == 9) {
        echo "Has perdido";
    } else {
    }
    $_SESSION['tablero'] = $tablero;
}

if (isset($_GET['reiniciar'])) {
    session_destroy($_SESSION['tablero']);
    $_SESSION['tablero'] = crearTablero(filas, columnas, minas);
    $_SESSION['minas'] = minas;
    $_SESSION['vsisible'];
    $tablero = $_SESSION['tablero'];
    $minas = $_SESSION['minas'];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Buscaminas</title>
</head>

<body>
    <h1>Buscaminas</h1>
    <table>
        <?php
        for ($i = 0; $i < filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < columnas; $j++) {
                echo "<td><a href='index.php?fila=$i&columna=$j'> X </a></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    </br>
    <table>
        <?php
        for ($i = 0; $i < filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < columnas; $j++) {
                echo "<td>" . $tablero[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    </br>
    <form action="index.php" method="post">
        <input type="submit" name="reiniciar" value="Volver a empezar">
    </form>
</body>

</html>