<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo MVC con PHP</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>

            <body>
    <div class="container">
        <header class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Centro medico</a>
                <label for="nombre"><?php
                    if (isset($_SESSION["Usuario"])) {
                        echo "Bienvenido " . $_SESSION["Usuario"];
                    }
                    ?></label>
                <a class="navbar-brand" href="app/Controller/Controller.php">Cerrar sesion</a>
            </div>
        </header>
        <header class="text-center">
        </header>
        <div class="row">
            <div class="col-lg-6">

                </div>
                <footer class="col-lg-12 text-center navbar navbar-default navbar-fixed-bottom">
                    Centro medico - <?php echo date("d-m-Y"); ?>
                </footer>
</body>

</html>