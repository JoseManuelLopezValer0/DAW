<?php

/**
 * 
 * Documentación
 * 
 * @author: Jose Manuel
 * @version: 1.0
 */

include 'config/config.php';

$prosesar = false;

session_start();

if (!isset($_session["Baraja"])) {
    shuffle($baraja);
    foreach ($baraja as $carta) {
        $_session["Baraja"][] = $carta;
    }
}

if (!isset($_COOKIE["victorias"])) {
    setcookie("victorias", 0, time() + 3600);
}

if (isset($_GET["reiniciar"])) {
    setcookie("victorias", 0, time() + 3600);
}

if (isset($_GET["pedir"])) {

    $SESION["cartas"][] = $_SESSION["Baraja"][$SESION["Baraja"] - 1];
    array_pop($_SESSION["Baraja"]);
}

if (isset($_GET["nueva"])) {
    $_SESSION["suma"] = 0;
    $_SESSION["sumaM"] = 0;
    $_SESSION["cartas"] = array();
    $_SESSION["cartasMaquina"] = array();
}

setcookie("victorias", 0, time() + 3600);
echo "<!DOCTYPE html>
    <html>
    <head>
    <meta charset='UTF-8'>
    <title>Examen UD4</title>
    </head>
    <body>
    <h1>Las 7 y 1/2</h1>
    <h2>Numero de victorias: " . $_COOKIE["victorias"] . "</h2>
    <a href='#' > Pedir </a> | <a href='#'>Plantarse</a> | <a href='#'>Reiniciar victorias</a> | <a href='#'>Nueva partida</a>
    <br>";
echo "Jugador: 
    <br>
    valor: " . $_SESSION["suma"] . "<br>
    <br>
    ";
if (isset($_SESSION["cartas"])) {
    foreach ($_SESSION["cartas"] as $carta) {
        echo "<img src='public/img/"  . $baraja[$carta]["imagen"] . "'>";
    }
}

echo "<br>
    Maquina: 
    <br>
    ";
if (isset($_SESSION["cartasMaquina"])) {
    foreach ($_SESSION["cartasMaquina"] as $carta) {
        echo "<img src='public/img/reverso.jpg'>";
    }
}


echo "
</body>
</html>";
