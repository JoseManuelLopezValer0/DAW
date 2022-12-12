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

if (!isset($_SESSION["Baraja"])) {
    $_SESSION["Baraja"] = shuffle($baraja);
}

if (!isset($_COOKIE["victorias"])) {
    setcookie("victorias", 0, time() + 3600);
}

if (isset($_GET["reiniciar"])) {
    setcookie("victorias", 0, time() + 3600);
}

if (isset($_GET["pedir"])) {
    if (isset($_GET["suma"])) {
        if ($_SESSION["suma"] <= 7.5 && $_SESSION["sumaM"] < $_SESSION["suma"] || $_SESSION["sumaM"] > 7.5 && $_SESSION["suma"] <= 7.5 || $_SESSION["sumaM"] > 7.5 && $_SESSION["suma"] > 7.5) {
            echo "Has ganado";
            $_COOKIE["victorias"]++;
        } elseif ($_SESSION["suma"] > 7.5) {
            echo "Has perdido";
        }
    }

    $numero = rand(0, 39);
    $_SESSION["suma"] += $baraja[$numero]["valor"];
    $_SESSION["cartas"][] = $baraja[$numero]["numero"];

    $numeroM = rand(0, 39);
    $_SESSION["sumaM"] += $baraja[$numeroM]["valor"];
    $_SESSION["cartasMaquina"][] = $baraja[$numeroM]["numero"];
}

if (isset($_GET["nueva"])) {
    $_SESSION["suma"] = 0;
    $_SESSION["sumaM"] = 0;
    $_SESSION["cartas"] = [];
    $_SESSION["cartasMaquina"] = [];
}

echo "<!DOCTYPE html>
        <html>
        <head>
        <meta charset='UTF-8'>
        <title>Examen UD4</title>
        </head>
        <body>
        <h1>Las 7 y 1/2</h1>
        <h2>Numero de victorias: " . $_COOKIE["victorias"] . "</h2>
        <a href='index.php?pedir=1'>Pedir carta</a> | <a>Plantarse</a> | <a href='index.php?reiniciar=1'>Reiniciar victorias</a> | <a href='index.php?nueva=1'>Nueva partida</a>
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

// echo "<br>
// jugador: valor " . $_SESSION["suma"] . "<br>
// jugador: carta " . $baraja[$numero]["numero"] . "<br>
// jugador: carta " . $numero . "<br>
// maquina: valor " . $_SESSION["sumaM"] . "<br>
// maquina: carta " . $baraja[$numeroM]["numero"] . "<br>
// maquina: carta " . $numeroM . "<br>
echo "
</body>
</html>";
