<?php
$aAsignaturas = array(
    "DWES" => array("Titulo" => "DWES", "Enlace" => "<a href='/DAW/DWES/'>Carpeta</a>")
);

foreach ($aAsignaturas as $i => $value1) {
    foreach ($aAsignaturas[$i] as $j => $value) {
        echo "$value ";
    }
};
