<?php

/**
 * 
 * Documentación:
 * 
 * @autor: Jose Manuel Lopez Valero
 * @version: 1.0
 * 
 */

include "lib/funciones.php";
include "config/config.php";

$procesaformulario = false;
$usuario = "";
$pass = "";

if (isset($_COOKIE['enviar'])) {
    $procesaformulario = true;
    $usuario = $_COOKIE['usuario'];
    $pass = $_COOKIE['pass'];
}

if (isset($_POST['enviar'])) {
    if ($_POST['usuario'] == "usuario" &&  $_POST['pass'] == "1234") { {
            $procesaformulario = true;
            setcookie('usuario', $_POST['usuario'], time() + 3600);
            setcookie('pass', $_POST['pass'], time() + 3600);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jose Manuel Lopez Valero">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    if ($procesaformulario) {
        echo "Bienvenido";
    } else {
        echo "Usuario o contraseña incorrectos";
    }
    ?>
    <form action="index.php" method="post">
        <fieldset>
            <legend>Formulario</legend>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" value="<?php echo $usuario; ?>">
            <label for="pass">Contraseña</label>
            <input type="password" name="pass" id="pass" value="<?php echo $pass; ?>">
            recordar
            <input type="checkbox" name="recordar" id="recordar" value="recordar">
            <input type="submit" name="enviar" value="Enviar">
        </fieldset>
    </form>

</body>

</html>