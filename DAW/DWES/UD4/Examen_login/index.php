<?php

include('config/config.php');
include('lib/function.php');

session_start();

if (isset($_POST['carrito'])) {
    $_SESSION['carrito'] = array();
    $_Session['abonos'] = generarAbonos(NABONOS);
    $_SESSION['usuario'] = 'invitado';
    $_SESSION['entradas_venidas'] = array();
}

$msgError = "";

if (isset($_POST['login'])) {
    $user = clearData($_POST['user']);
    $pass = clearData($_POST['pass']);
    if ($_POST['user'] == 'usuario' && $_POST['pass'] == 'usuario') {
        $_SESSION['usuario'] = 'usuario';
    } else {
        $msgError = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="López">
    <title>CB Pokemons</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <h1>CB POKEMONS</h1>
    <div>
        <?php
        if ($_SESSION['usuario'] == 'invitado') {
            echo "<form action='index.php' method='post'>";
            include('include/login_form.html');
            echo "$msgError";
        } else {
            echo 'usuario : ' . $_SESSION['usuario'] . ' <a href="logout.php">Cerrar sesión</a>';
        }
        ?>
    </div>
    <div>
        <a href="index.php">Home</a>
        <?php if ($_SESSION['usuario'] == 'usuario')  echo "<a href='ventas.php'>Ventas</a>"; ?>
    </div>
    <h2>Pública</h2>
    <div>
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/aQ4BmnHDVgs" title="TOP 10 MEJORES JUGADORES DE BALONCESTO DE TODOS LOS TIEMPOS" frameborder="12" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</body>

</html>