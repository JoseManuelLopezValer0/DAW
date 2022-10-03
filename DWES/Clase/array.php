<?php

/**
 * Creación y recorrido de un array.
 * @author Gontzal García Triviño
 */
$contactos[] = [
    ["id" => 1, "nombre" => "Mafalda", "telefono" => "666123123"],
    ["id" => 2, "nombre" => "Manolito", "telefono" => "667422100"],
    ["id" => 3, "nombre" => "Felipe", "telefono" => "668234233"]
];
foreach ($contactos as $clave => $valor) {
    echo $clave;
}
