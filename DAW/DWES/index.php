<html>

<head>
    <meta charset="UTF-8">
    <title>Desarrollo entorno servidor - Jose Manuel Lopez Valero</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <?php
        include "../../lib/cabecera.html";
        ?>
        <hr>
    </header>
    <main>
        <?php
        include "../../DAW/config/config.php";
        obtener_estructura_directorios(".");
        ?>
    </main>
</body>

</html>