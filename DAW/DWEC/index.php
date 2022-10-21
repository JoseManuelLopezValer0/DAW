<?php
$aEjercicios = array(
    "ejercicio 1" => array(
        array("titulo" => "ejercicio 1", "Enlace" => "<a href='ejercicio 1/ '>"),
        array("titulo" => "ejercicio 2", "Enlace" => "<a href='ejercicio 1/3º/ '>"),
        array("titulo" => "ejercicio 3", "Enlace" => "<a href='ejercicio 1/2º/ '>"),
        array("titulo" => "ejercicio 4", "Enlace" => "<a href='ejercicio 1/1º/ '>"),
    ),
    "ejercicio 2" => array(
        array("titulo" => "ejercicio 2", "Enlace" => "<a href='ejercicio 2/ '>"),
    ),
    "sobre-mi-JoseManuelLopezValer0" => array(
        array("titulo" => "sobre-mi-JoseManuelLopezValer0", "Enlace" => "<a href='sobre-mi-JoseManuelLopezValer0/ '>"),
    ),
    "UD 1" => array(
        array("titulo" => "Actividad 1", "Enlace" => "<a href='UD 1/Actividad 1 '>"),
        array("titulo" => "ud1-a3-etiqueta-script-JoseManuelLopezValer0", "Enlace" => "<a href='UD 1/ud1-a3-etiqueta-script-JoseManuelLopezValer0 '>"),
    ),
    "UD 2" => array(
        array("titulo" => "ej1-17-introduccion-a-javascritp-javier-eguiluz-perez-JoseManuelLopezValer0", "Enlace" => "<a href='UD 2/ej1-17-introduccion-a-javascritp-javier-eguiluz-perez-JoseManuelLopezValer0 '>"),
        array("titulo" => "tarea-2-5-tipos-de-datos-primitivos-y-objetos-JoseManuelLopezValer0", "Enlace" => "<a href='UD 2/tarea-2-5-tipos-de-datos-primitivos-y-objetos-JoseManuelLopezValer0'>"),
        array("titulo" => "tarea-2-7-organismos-y-estandares-JoseManuelLopezValer0", "Enlace" => "<a href='UD 2/tarea-2-7-organismos-y-estandares-JoseManuelLopezValer0'>"),
        array("titulo" => "tarea-2-8-ambitos-y-closures-JoseManuelLopezValer0", "Enlace" => "<a href='UD 2/tarea-2-8-ambitos-y-closures-JoseManuelLopezValer0'>"),
        array("titulo" => "tarea-2-9-los-tres-puntitos-JoseManuelLopezValer0", "Enlace" => "<a href='UD 2/tarea-2-9-los-tres-puntitos-JoseManuelLopezValer0'>"),
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
    <a href="../../"><input type="button" value="Volver"></input></a>
    <?php
    foreach ($aEjercicios as $i => $value1) {
        echo "<h1>$i</h1>";
        foreach ($value1 as $j => $value2) {
            echo "<li>";
            echo $value2["Enlace"];
            echo "<span class=name>$value2[titulo]</span>";
            echo "</a>";
            echo "</li>";
            echo " ";
        }
    };

    ?>
</body>

</html>