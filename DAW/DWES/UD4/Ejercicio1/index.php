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


$procesaFormulario = false;


if (isset($_POST['crear'])) {
    $procesaFormulario = true;
    crearCookie($_POST['nombrec'], $_POST['valor'], $_POST['tiempo']);
} else if (isset($_POST['borrar'])) {
    $procesaFormulario = true;
    borrarCookie($_POST['nombreb']);
}else if (isset($_POST['mostrar'])) {
    $procesaFormulario = true;
    mostrarCookie($_POST['nombrem']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jose Manuel Lopez Valero">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 1</title>
</head>

<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Crear Cookie</legend>
            Nombre : <input type="text" id="nombrec"> Valor <input type="text" id="Valor"> Tiempo : <input type="number" id="tiempo" max="60" min="10" value="10"> <input type="submit" name="Crear" value="Crear">
        </fieldset>
        <fieldset>
            <legend>Borrar Cookie</legend>
            Nombre : <input type="text" id="nombreb"> <input type="submit" name="Borrar" value="Borrar">
        </fieldset>
        <fieldset>
            <legend>Mostrar Cookie</legend>
            Nombre : <input type="text" id="nombrem"> <input type="submit" name="Mostar" value="Mostrar">
        </fieldset>
        <fieldset>
            <legend>Mostrar todas las cookies</legend>
        </fieldset>
    </form>
</body>

</html>




<!-- document.getElementById("tiempo").value -->