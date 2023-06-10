<!DOCTYPE html>
<?php
if (!isset($_SESSION["Usuario"])) {
    session_start();
}


if (isset($_POST["nombre"]) && isset($_POST["password"])) {
    require_once("app/Controller/sesionController.php");
    $sesion = new sesion();
    $datos = $sesion->getSesion($_POST["nombre"], $_POST["password"]);
    if ($datos) {
        $_SESSION["Usuario"] = $_POST["nombre"];
        $_SESSION["perfil"] = $sesion->getPerfil($_SESSION["id"]);
        header("Location: index.php");
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos')</script>";
    }
    
}

?>
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
                <a class="navbar-brand" href="index.php">Centro medico</a>
                <?php
                if (isset($_SESSION["Usuario"])) {
                    echo "<a class='navbar-brand' href='app/Controller/logoutController.php'>Cerrar sesion</a>";
                    echo "<h3>Bienvenido " . $_SESSION["Usuario"] . "</h3>";
                    } 
                if (!isset($_SESSION["Usuario"]))
                    echo "<a class='navbar-brand' href='views/registro.php'>Registrarse</a>";
                ?>
            </div>
        </header>
        <header class="text-center">
        </header>
        <div class="row">
            <div class="col-lg-6">

                <?php
                if (isset($_SESSION["Usuario"])) {
                        if($_SESSION["perfil"] == "Administrador"){
                            require_once("views/administrador.php");
                        }
                        if($_SESSION["perfil"] == "Medico"){
                            require_once("views/medico.php");
                        }
                        if($_SESSION["perfil"] == "Paciente"){
                            require_once("views/paciente.php");
                        }
                    
                } else {
                    echo "<form action='#' method='post' class='col-lg-5'>
                    <h3>Inicio de sesion</h3>
                    <div class='form-group'>
                    <label for='nombre'>Nombre</label>
                    <input type='text' name='nombre' value='' class='form-control required' />
                    <label for='nombre'>Contraseña</label>
                    <input type='password' name='password' value='' class='form-control required' />
                        <br />
                        <input type='submit' value='Iniciar sesion' class='btn btn-success btn-lg' />
                        </div>
                        </form>";
                }
                ?>
                <footer class="col-lg-12 text-center navbar navbar-default navbar-fixed-bottom">
                    Centro medico - <?php echo date("d-m-Y"); ?>
                </footer>
            </div>
</body>

</html>