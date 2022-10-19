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
        "DWES" => array("Titulo" => "DWES", "Enlace" => "<a href='/DAW/DWES/'>DWES</a>"),
        "DWEC" => array("Titulo" => "DWEC", "Enlace" => "<a href='/DAW/DWEC/'>DWEC</a>"),
        "DIW" => array("Titulo" => "DIW", "Enlace" => "<a href='/DAW/DIW/'>DIW</a>"),
        "DAW" => array("Titulo" => "DAW", "Enlace" => "<a href='/DAW/DAW/'>DAW</a>"),
        "HLC" => array("Titulo" => "HLC", "Enlace" => "<a href='/DAW/HLC/'>HLC</a>")
    );

    foreach ($aAsignaturas as $i => $value1) {
        echo $value1["Enlace"];
        echo" ";
    };

    ?>
</body>

</html>