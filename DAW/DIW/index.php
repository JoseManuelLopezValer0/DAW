<?php
$aEjercicios = array(
    "Clase" => array(
        array("titulo" => "Ejemplos clase", "Enlace" => "<a class='alista'href='Clase/ejemplos canvas/'>"),
    ),
    "tema2" => array(
        array("titulo" => "Practica 2", "Enlace" => "<a class='alista'href='tema 2/Practica 2/'>"),
        array("titulo" => "Practica 3", "Enlace" => "<a class='alista'href='tema 2/Practica 3/'>"),
        array("titulo" => "Practica 4", "Enlace" => "<a class='alista'href='tema 2/Practica 4/'>"),
        array("titulo" => "Practica 5", "Enlace" => "<a class='alista'href='tema 2/Practica 5/'>"),
    ),
    "Ejemplos" => array(
        array("titulo" => "Ejemplo", "Enlace" => "<a class='alista'href='Clase/Ejemplos/'>"),
    ),

);

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Desarrollo interfaces web - Jose Manuel Lopez Valero</title>
    <link rel="stylesheet" href="css/style.css">
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