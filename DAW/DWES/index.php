<?php
$aEjercicios = array(
    "Clase" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a class='alista'href='Clase/1.php'>", "tags" => "ud1, Clase"),
        array("titulo" => "ejercicio 2", "Enlace" => "<a class='alista'href='Clase/2.php'>", "tags" => "ud1, Clase"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a class='alista'href='Clase/3.php'>", "tags" => "ud1, Clase"),
        array("titulo" => "ejercicio 4", "Enlace" => "<a class='alista'href='Clase/4.php'>", "tags" => "ud1, Clase"),
        array("titulo" => "array", "Enlace" => "<a class='alista'href='Clase/array.php'>", "tags" => "ud1, Clase")
    ),
    "Tema 1" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a class='alista'href='UD1/ej1.php'>", "tags" => "ud1, arrays"),
        array("titulo" => "ejercicio 1", "Enlace" => "<a class='alista'href='UD1/ej2.php'>", "tags" => "ud1, arrays"),
        array("titulo" => "ejercicio 1", "Enlace" => "<a class='alista'href='UD1/ej3.php'>", "tags" => "ud1, arrays"),
    ),
    "Tema 3" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a class='alista'href='UD3/arrays.php'>", "tags" => "ud3, arrays"),
        array("titulo" => "ejercicio 2", "Enlace" => "<a class='alista'href='UD3/calendario.php'>", "tags" => "ud3, arrays"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a class='alista'href='UD3/listaAlumnos.php'>", "tags" => "ud3, arrays")
    ),
    "Formualrios" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a class='alista'href='UD3/Formularios/ejercicio1.php'>", "tags" => "ud3, formularios"),
        array("titulo" => "ejercicio 2", "Enlace" => "<a class='alista'href='UD3/Formularios/ejercicio2.php'>", "tags" => "ud3, formularios"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a class='alista'href='UD3/Formularios/ejercicio3.php'>", "tags" => "ud3, formularios"),
        array("titulo" => "ejercicio 4", "Enlace" => "<a class='alista'href='UD3/Formularios/ejercicio4.php'>", "tags" => "ud3, formularios"),
        array("titulo" => "Tabla de multiplicar 1", "Enlace" => "<a class='alista'href='UD3/Formularios/Tabla-formularios.php'>", "tags" => "ud3, formularios"),
        array("titulo" => "Tabla de multiplicar 2", "Enlace" => "<a class='alista'href='UD3/Formularios/tabla de multiplicar/'>", "tags" => "ud3, formularios")
    ),
    "Tema 4 - Cookies" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a class='alista'href='UD4/Cookies/Ejercicio1/'>", "tags" => "ud4, Cookies"),
        array("titulo" => "ejercicio 2", "Enlace" => "<a class='alista'href='UD4/Cookies/Ejercicio2/'>", "tags" => "ud4, Cookies"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a class='alista'href='UD4/Cookies/Ejercicio3/'>", "tags" => "ud4, Cookies"),
        array("titulo" => "ejercicio 4", "Enlace" => "<a class='alista'href='UD4/Cookies/Ejercicio4/'>", "tags" => "ud4, Cookies"),
        array("titulo" => "ejercicio 5", "Enlace" => "<a class='alista'href='UD4/Cookies/Ejercicio5/'>", "tags" => "ud4, Cookies")
    ),
    "Tema 4 - Sesiones" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a class='alista'href='UD4/Sesiones/Ejercicio1/'>", "tags" => "ud4, Sesiones"),
        array("titulo" => "ejercicio 2", "Enlace" => "<a class='alista'href='UD4/Sesiones/Ejercicio2/'>", "tags" => "ud4, Sesiones"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a class='alista'href='UD4/Sesiones/Ejercicio3/'>", "tags" => "ud4, Sesiones"),
    ),
    "Tema 4 - Autentificación" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a class='alista'href='UD4/Autentificación/Ejercicio1/'>", "tags" => "ud4, Autentificación"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a class='alista'href='UD4/Autentificación/Ejercicio3/'>", "tags" => "ud4, Autentificación"),
    ),    
    "Proyectos Clase" => array(
        array("titulo" => "Irregulares", "Enlace" => "<a class='alista'href='Irregulares/index.php'>", "tags" => "formularios, Irregulares"),
    ),
    "Examenes" => array(
        array("titulo" => "Examen 1", "Enlace" => "<a class='alista'href='Examenes/RA3/'>", "tags" => "examen, 1"),
    )


);

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Desarrollo web en entorno servidor - Jose Manuel Lopez Valero</title>
    <link rel="stylesheet" href="css/style.css">
</head>
</head>

<body>
    <header class="super-cabecera">
        <nav>
            <ul>
                <li><a href="../../">
                        <i class="fa fa-fw fa-home fa-5x"></i>
                        <span class="borde"></span>
                        <span class="texto">VOLVER</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <hr>
    <?php
    foreach ($aEjercicios as $i => $value1) {
        echo "<h1>$i</h1>";
        foreach ($value1 as $j => $value2) {
            echo "<li class='lilista'>";
            echo $value2["Enlace"];
            echo "<span class='spanlista' class=name>$value2[titulo]</span>";
            echo "</a>";
            echo "</li>";
            echo " ";
        }
        echo "<hr>";
    };
    ?>
</body>

</html>