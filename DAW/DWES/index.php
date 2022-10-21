<?php
$aEjercicios = array(
    "Clase" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='Clase/1.php'>", "tags" => "ud1, Clase"),
        array("titulo" => "ejercicio 2", "Enlace" => "<a href='Clase/2.php'>", "tags" => "ud1, Clase"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a href='Clase/3.php'>", "tags" => "ud1, Clase"),
        array("titulo" => "ejercicio 4", "Enlace" => "<a href='Clase/4.php'>", "tags" => "ud1, Clase"),
        array("titulo" => "array", "Enlace" => "<a href='Clase/array.php'>", "tags" => "ud1, Clase")
    ),
    "Tema 1" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD1/ej1.php'>", "tags" => "ud1, arrays"),
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD1/ej2.php'>", "tags" => "ud1, arrays"),
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD1/ej3.php'>", "tags" => "ud1, arrays"),
    ),
    "Tema 3" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD3/arrays.php'>", "tags" => "ud3, arrays"),
        array("titulo" => "ejercicio 2", "Enlace" => "<a href='UD3/calendario.php'>", "tags" => "ud3, arrays"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a href='UD3/listaAlumnos.php'>", "tags" => "ud3, arrays")
    ),
    "Tema 4" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD4/Ejercicio1/'>", "tags" => "ud4, Cookies"),
        array("titulo" => "ejercicio 2", "Enlace" => "<a href='UD4/Ejercicio2/'>", "tags" => "ud4, Cookies"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a href='UD4/Ejercicio3/'>", "tags" => "ud4, Cookies"),
        array("titulo" => "ejercicio 4", "Enlace" => "<a href='UD4/Ejercicio4/'>", "tags" => "ud4, Cookies"),
        array("titulo" => "ejercicio 5", "Enlace" => "<a href='UD4/Ejercicio5/'>", "tags" => "ud4, Cookies")
    ),
    "Formualrios" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='UD3/Formularios/ejercicio1.php'>", "tags" => "ud3, formularios"),
        array("titulo" => "ejercicio 2", "Enlace" => "<a href='UD3/Formularios/ejercicio2.php'>", "tags" => "ud3, formularios"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a href='UD3/Formularios/ejercicio3.php'>", "tags" => "ud3, formularios"),
        array("titulo" => "ejercicio 4", "Enlace" => "<a href='UD3/Formularios/ejercicio4.php'>", "tags" => "ud3, formularios"),
        array("titulo" => "Tabla de multiplicar 1", "Enlace" => "<a href='UD3/Formularios/Tabla-formularios.php'>", "tags" => "ud3, formularios"),
        array("titulo" => "Tabla de multiplicar 2", "Enlace" => "<a href='UD3/Formularios/tabla de multiplicar/index.php'>", "tags" => "ud3, formularios")
    ),
    "Irregulares" => array(
        array("titulo" => "index.php", "Enlace" => "<a href='Irregulares/index.php'>", "tags" => "formularios, Irregulares"),
    )

);

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Desarrollo web en entorno servidor - Jose Manuel Lopez Valero</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<a href="../../"><input type="button" value="Volver" class="css-button-fully-rounded--black"></input></a>
    <?php
foreach ($aEjercicios as $i => $value1) {
    echo "<h1>$i</h1>";
    foreach ($value1 as $j => $value2) {
        echo "<li>";
        echo $value2["Enlace"];
        echo "<span class=name>$value2[titulo]</span>";
        echo "</a>";
        echo "</li>";
        echo" ";
    }
}

    ?>
</body>

</html>