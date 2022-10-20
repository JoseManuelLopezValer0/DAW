<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>Inicio</h1>
    <p>Pagina de Jose Manuel Lopez Valero</p>

    <?php
    $aAsignaturas = array(
        "DWES" => array("Titulo" => "DWES", "Enlace" => "<a href='/DAW/DWES/'>"),
        "DWEC" => array("Titulo" => "DWEC", "Enlace" => "<a href='/DAW/DWEC/'>"),
        "DIW" => array("Titulo" => "DIW", "Enlace" => "<a href='/DAW/DIW/'>"),
        "DAW" => array("Titulo" => "DAW", "Enlace" => "<a href='/DAW/DAW/'>"),
        "HLC" => array("Titulo" => "HLC", "Enlace" => "<a href='/DAW/HLC/'>")
    );

    foreach ($aAsignaturas as $i => $value1) {
        echo "<li>";
        echo $value1["Enlace"];
        echo "<span class=name>$value1[Titulo]</span>";
        echo "</a>";
        echo "</li>";
        echo" ";
    };

    ?>
</body>

</html>