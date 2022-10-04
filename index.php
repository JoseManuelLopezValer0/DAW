<?php
$aEjercicios = array(
    "Tema 1" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "/DAW/DWES/UD1/ej1.php", "tags" => "ud1,arrays"),
        array("titulo" => "ejercicio 2", "Enlace" => "/DAW/DWES/UD1/ej2.php", "tags" => "ud1,arrays"),
        array("titulo" => "ejercicio 3", "Enlace" => "/DAW/DWES/UD1/ej3.php", "tags" => "ud1,arrays")
    ),
    "Tema 2" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "/DAW/DWES/UD2/ej1.php", "tags" => "ud1,arrays"),
        array("titulo" => "ejercicio 2", "Enlace" => "/DAW/DWES/UD2/ej2.php", "tags" => "ud1,arrays"),
        array("titulo" => "ejercicio 3", "Enlace" => "/DAW/DWES/UD2/ej3.php", "tags" => "ud1,arrays")
    ),
    "Tema 3" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "/DAW/DWES/UD3/ej1.php", "tags" => "ud1,arrays"),
        array("titulo" => "ejercicio 2", "Enlace" => "/DAW/DWES/UD3/ej2.php", "tags" => "ud1,arrays"),
        array("titulo" => "ejercicio 3", "Enlace" => "/DAW/DWES/UD3/ej3.php", "tags" => "ud1,arrays")
    )
);

foreach ($aEjercicios as $i => $value1) {
    echo $i;
    echo "<p>";
    foreach ($aEjercicios[$i] as $j => $value2) {
        foreach ($aEjercicios[$i][$j] as $k => $value) {
            echo $value;
            echo " ";
        }
        echo "<p>";
    }
    echo "<br>";
};
echo"<a href='https://github.com/JoseManuelLopezValer0/DAW/blob/main/DAW/DWES/index.php'>Repositorio</a>";