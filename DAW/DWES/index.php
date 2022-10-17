<?php
$aEjercicios = array(
    "Clase" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='Clase/1.php'>1.php</a>", "tags" => "ud1, Clase"),
        array("titulo" => "ejercicio 2", "Enlace" => "<a href='Clase/2.php'>2.php</a>", "tags" => "ud1, Clase"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a href='Clase/3.php'>3.php</a>", "tags" => "ud1, Clase"),
        array("titulo" => "ejercicio 4", "Enlace" => "<a href='Clase/4.php'>4.php</a>", "tags" => "ud1, Clase"),
        array("titulo" => "array", "Enlace" => "<a href='Clase/array.php'>array.php</a>", "tags" => "ud1, Clase")
    ),
    "Tema 1" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD1/ej1.php'>ejercicio 1</a>", "tags" => "ud1, arrays"),
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD1/ej2.php'>ejercicio 2</a>", "tags" => "ud1, arrays"),
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD1/ej3.php'>ejercicio 3</a>", "tags" => "ud1, arrays"),
    ),
    "Tema 3" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD3/arrays.php'>arrays.php</a>", "tags" => "ud3, arrays"),
        array("titulo" => "ejercicio 2", "Enlace" => "<a href='UD3/calendario.php'>calendario.php</a>", "tags" => "ud3, arrays"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a href='UD3/listaAlumnos.php'>listaAlumnos.php</a>", "tags" => "ud3, arrays")
    ),
    "Formualrios" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD3/Formularios/ejercicio1.php'>ejercicio1.php</a>", "tags" => "ud3, formularios"),
        array("titulo" => "ejercicio 2", "Enlace" => "<a href='UD3/Formularios/ejercicio2.php'>ejercicio2.php</a>", "tags" => "ud3, formularios"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a href='UD3/Formularios/ejercicio3.php'>ejercicio3.php</a>", "tags" => "ud3, formularios"),
        array("titulo" => "ejercicio 4", "Enlace" => "<a href='UD3/Formularios/ejercicio4.php'>ejercicio4.php</a>", "tags" => "ud3, formularios"),
        array("titulo" => "Tabla de multiplicar 1", "Enlace" => "<a href='UD3/Formularios/Tabla-formularios.php'>Tabla-formularios.php</a>", "tags" => "ud3, formularios"),
        array("titulo" => "Tabla de multiplicar 2", "Enlace" => "<a href='UD3/Formularios/tabla de multiplicar/index.php'>Tabla.php</a>", "tags" => "ud3, formularios")
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
?>
<html>

<head>
    <title>
        Desarrollo web en entorno servidor - Jose Manuel Lopez Valero
    </title>
</head>

<body>
</body>

</html>