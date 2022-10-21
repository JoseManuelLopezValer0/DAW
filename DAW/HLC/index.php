<?php
$aEjercicios = array(
    "UD1" => array(
        array("titulo" => "A0", "Enlace" => "<a href='UD 1/A0/'>"),
        array("titulo" => "A3 Módulos ES6", "Enlace" => "<a href='UD 1/A3 Módulos ES6/'>"),
        array("titulo" => "ud1-a2-destructuracion-destructuring-JoseManuelLopezValer0", "Enlace" => "<a href='UD 1/ud1-a2-destructuracion-destructuring-JoseManuelLopezValer0/'>"),
        array("titulo" => "ud1-a3-modulos-es6-JoseManuelLopezValer0", "Enlace" => "<a href='UD 1/ud1-a3-modulos-es6-JoseManuelLopezValer0/'>"),
        array("titulo" => "ud1-a4-clases-en-javascript-JoseManuelLopezValer0", "Enlace" => "<a href='UD 1/ud1-a4-clases-en-javascript-JoseManuelLopezValer0/'>"),
    ),
);

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Desarrollo web en entorno servidor - Jose Manuel Lopez Valero</title>
    <link rel="stylesheet" href="css/estilo.css">
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