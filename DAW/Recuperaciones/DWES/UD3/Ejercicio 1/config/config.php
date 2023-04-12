<?php
/**
 * Configuración de la aplicación
 * 
 * @author   Jose Manuel
 */

// Constantes de configuración
define('NUM_ZONAS', 4);
define('NUM_LOCALIDADES_ZONA', 100);
define('NUM_ABONOS', 400);

// Array de tarifas
$tarifas = array(
    'Pokemons' => array(
        'A' => 10,
        'B' => 15,
        'C' => 20,
        'D' => 25
    ),
    'Picapiedras' => array(
        'A' => 10,
        'B' => 15,
        'C' => 20,
        'D' => 25
    ),
    'Roedores' => array(
        'A' => 10,
        'B' => 15,
        'C' => 20,
        'D' => 25
    ),
    'Perozosos' => array(
        'A' => 10,
        'B' => 15,
        'C' => 20,
        'D' => 25
    ),
    'Invisibles' => array(
        'A' => 10,
        'B' => 15,
        'C' => 20,
        'D' => 25
    ),
    'Legendarios' => array(
        'A' => 10,
        'B' => 15,
        'C' => 20,
        'D' => 25
    ),
    'Magos' => array(
        'A' => 10,
        'B' => 15,
        'C' => 20,
        'D' => 25
    ),
    'Sultanes' => array(
        'A' => 10,
        'B' => 15,
        'C' => 20,
        'D' => 25
    )
);

// Array de localidades ocupadas por socios
$localidadesSocios = array();

// Función para generar localidades ocupadas por socios
function generarLocalidadesSocios($numAbonos, $numZonas, $numLocalidadesZona) {
    $localidadesSocios = array();
    for ($i = 0; $i < $numAbonos; $i++) {
        $localidadesSocios[] = rand(1, $numZonas) . rand(1, $numLocalidadesZona);
    }
    return $localidadesSocios;
}

// Generamos las localidades ocupadas por socios
$localidadesSocios = generarLocalidadesSocios(NUM_ABONOS, NUM_ZONAS, NUM_LOCALIDADES_ZONA);

// Función para mostrar el formulario

function mostrarFormulario($tarifas, $localidadesSocios) {
    // Mostramos el formulario
    echo '<form action="index.php" method="post">';
    echo '<label for="equipo">Equipo visitante:</label>';
    echo '<select name="equipo" id="equipo">';
    foreach ($tarifas as $equipo => $tarifa) {
        echo '<option value="' . $equipo . '">' . $equipo . '</option>';
    }
    echo '</select>';
    echo '<br>';
    echo '<label for="zona">Zona:</label>';
    echo '<input type="radio" name="zona" value="A">A';
    echo '<input type="radio" name="zona" value="B">B';
    echo '<input type="radio" name="zona" value="C">C';
    echo '<input type="radio" name="zona" value="D">D';
    echo '<br>';
    echo '<label for="entradas">Entradas:</label>';
    echo '<input type="checkbox" name="entradas[]" value="1">1';
    echo '<input type="checkbox" name="entradas[]" value="2">2';
    echo '<input type="checkbox" name="entradas[]" value="3">3';
    echo '<input type="checkbox" name="entradas[]" value="4">4';
    echo '<input type="checkbox" name="entradas[]" value="5">5';
    echo '<input type="checkbox" name="entradas[]" value="6">6';
    echo '<input type="checkbox" name="entradas[]" value="7">7';
    echo '<input type="checkbox" name="entradas[]" value="8">8';
    echo '<input type="checkbox" name="entradas[]" value="9">9';
    echo '<input type="checkbox" name="entradas[]" value="10">10';
    echo '<br>';
    echo '<input type="submit" value="Comprar">';
    echo '</form>';
}

