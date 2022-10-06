<?php
$aEjercicios = array(
    "Tema 1" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD1/ej1.php'>ejercicio 1</a>", "tags" => "ud1,arrays"),
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD1/ej2.php'>ejercicio 2</a>", "tags" => "ud1,arrays"),
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD1/ej3.php'>ejercicio 3</a>", "tags" => "ud1,arrays"),
    ),
    "Tema 3" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD3/arrays.php'>arrays.php</a>", "tags" => "ud1,arrays"),
        array("titulo" => "ejercicio 2", "Enlace" => "<a href='UD3/calendario.php'>calendario.php</a>", "tags" => "ud1,arrays"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a href='UD3/listaAlumnos.php'>listaAlumnos.php</a>", "tags" => "ud1,arrays")
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
echo"enlace";
