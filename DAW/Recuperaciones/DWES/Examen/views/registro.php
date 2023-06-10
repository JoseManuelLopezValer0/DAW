<html>

<head>
    <meta charset="UTF-8">
    <title>Centro medico</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <header class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand" href="../index.php">Centro medico</a>
            </div>
        </header>
        <h1 class="text-center">Registro</h1>
        <!-- formulario de registro -->
        <form action="app/Controller/registroController.php" method="POST" class="form-horizontal col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="Usuario" class="control-label col-md-2">Usuario:</label>
                <div class="col-md-10">
                    <input type="text" name="nombre" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label col-md-2">Contraseña:</label>
                <div class="col-md-10">
                    <input type="password" name="password" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password2" class="control-label col-md-2">Repetir contraseña:</label>
                <div class="col-md-10">
                    <input type="password" name="password2" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label col-md-2">Nombre:</label>
                <div class="col-md-10">
                    <input type="text" name="nombre" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Registrarse" class="btn btn-success btn-lg center-block">
            </div>
        </form>


        <footer class="col-lg-12 text-center navbar navbar-default navbar-fixed-bottom">
            Centro medico - <?php echo date("d-m-Y"); ?>
        </footer>
    </div>
</body>

</html>