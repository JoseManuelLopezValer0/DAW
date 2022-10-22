<?php
$aEjercicios = array(
    "UD1" => array(
        array("titulo" => "A0", "Enlace" => "<a class='alista' href='UD 1/A0/'>"),
        array("titulo" => "A3 Módulos ES6", "Enlace" => "<a class='alista' href='UD 1/A3 Módulos ES6/'>"),
        array("titulo" => "ud1-a2-destructuracion-destructuring-JoseManuelLopezValer0", "Enlace" => "<a class='alista' href='UD 1/ud1-a2-destructuracion-destructuring-JoseManuelLopezValer0/'>"),
        array("titulo" => "ud1-a3-modulos-es6-JoseManuelLopezValer0", "Enlace" => "<a class='alista' href='UD 1/ud1-a3-modulos-es6-JoseManuelLopezValer0/'>"),
        array("titulo" => "ud1-a4-clases-en-javascript-JoseManuelLopezValer0", "Enlace" => "<a class='alista' href='UD 1/ud1-a4-clases-en-javascript-JoseManuelLopezValer0/'>"),
    ),
);

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Horas de libre configuracion - Jose Manuel Lopez Valero</title>
    <link rel="stylesheet" href="css/estilo.css">
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

</html>F