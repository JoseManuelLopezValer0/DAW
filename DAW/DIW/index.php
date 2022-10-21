<?php
$aEjercicios = array(
    "Clase" => array(
        array("titulo" => "Ejemplos clase", "Enlace" => "<a href='Clase/ejemplos canvas/'>"),
    ),
    "tema2" => array(
        array("titulo" => "Practica 2", "Enlace" => "<a href='tema 2/Practica 2/'>"),
        array("titulo" => "Practica 3", "Enlace" => "<a href='tema 2/Practica 3/'>"),
        array("titulo" => "Practica 4", "Enlace" => "<a href='tema 2/Practica 4/'>"),
        array("titulo" => "Practica 5", "Enlace" => "<a href='tema 2/Practica 5/'>"),
    ),
    "Ejemplos" => array(
        array("titulo" => "Ejemplo", "Enlace" => "<a href='Clase/Ejemplos/'>"),
    ),

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
    <hr>
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
            echo "<hr>";
        }

    ?>
</body>

</html>