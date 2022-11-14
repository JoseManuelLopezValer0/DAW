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

$tablero = crearTablero(filas, columnas, minas);
mostrarTablero($tablero);
