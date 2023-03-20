<html>

<head>
    <meta charset="UTF-8">
    <title>Diseño de interfaces web - Jose Manuel Lopez Valero</title>
    <script src="../../js/main.js"></script>
    <link rel="stylesheet" href="../css/css.css">
    </head>

<body>
    <header>
        <?php
        include "../../../lib/cabecera.html";
        ?>
        <hr>
    </header>
    <main>
        <?php
        include "../../../DAW/config/config.php";
        obtener_estructura_directorios(".");
        ?>
    </main>
</body>

</html>