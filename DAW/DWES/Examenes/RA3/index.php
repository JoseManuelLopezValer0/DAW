<?php

/**
 * 
 * Documentacion:
 * 
 * @author: Jose Manuel
 * @version: 1.0
 * 
 */
include 'lib/funciones.php';
include 'config/config.php';

$procesarFormulario = false;
$localidadesSocios;
$localidadesSeleccionadas;
$zona;
$equipo;
$precio;

if (isset($_POST['enviar']) && !isset($_POST['localidades'])) {
    $procesarFormulario = false;
    echo "<p style='color:red'>Debe seleccionar al menos una localidad</p>";
    echo "<a href='index.php'>Volver</a>";
} else if (isset($_POST['enviar']) && !isset($_POST['zona'])) {
    $procesarFormulario = false;
    echo "<p style='color:red'>Debe seleccionar una zona</p>";
    echo "<a href='index.php'>Volver</a>";
} else if (isset($_POST['enviar'])) {
    $procesarFormulario = true;
    $localidadesSocios = localidadesOcupadas();
    $localidadesSeleccionadas = $_POST['localidades'];
    $zona = $_POST['zona'];
    $equipo = $_POST['equipo'];
    $precio = Tarifa[$equipo][$zona];
    $total = count($localidadesSeleccionadas) * $precio;
    echo "<p>Localidades seleccionadas: " . count($localidadesSeleccionadas) . "</p>";
    echo "<p>Precio: $precio €</p>";
    echo "<p>Total: $total €</p>";
    echo "<input type='button' value='Volver' onclick='history.back()'>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="López">
    <title>Examen RA3</title>
</head>

<body>
    <form action='index.php' method='post'>
        Equipo: <select name='equipo'>
            <?php
            foreach (Tarifa as $key => $value) {
                echo "<option value='$key'>$key</option>";
            }
            ?>
        </select>
        <br>
        Zona
        <input type='radio' name='zona' value='A'>A
        <input type='radio' name='zona' value='B'>B
        <input type='radio' name='zona' value='C'>C
        <input type='radio' name='zona' value='D'>D
        <br>
        <table border='1'>
            <?php
            $localidadesSocios = localidadesOcupadas();
            mostrarLocalidades($localidadesSocios);
            ?>
            
        </table>


        <input type='submit' name='enviar' value='Enviar'>

    </form>
</body>

</html>