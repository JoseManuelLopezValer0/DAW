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

if (!isset($_POST['enviar'])) {
?>
    <form action='index.php' method='post'>
        Equipo: <select name='equipo'>
            <?php
            foreach (Tarifa as $key => $value) {
                echo "<option value='$key'>$key</option>";
            }
            ?>
        </select>
        <br>
        Localidad
        <input type='radio' name='zona' value='A'>A
        <input type='radio' name='zona' value='B'>B
        <input type='radio' name='zona' value='C'>C
        <input type='radio' name='zona' value='D'>D
        <br>
        <table border='1'>
            <?php
            $localidadesSocios = localidadesOcupadas();
            $i = 1;
            for ($f = 1; $f <= 10; $f++) {
                echo "<tr>";
                for ($c = 1; $c <= 10; $c++) {
                    if (in_array($i, $localidadesSocios)) {
                        echo "<td style='background-color:gray'>$i</td>";
                    } else {
                        echo "<td>";
                        echo "<input type='checkbox' name='localidades[]' value='$i'> $i";
                        echo "</td>";
                    }
                    $i++;
                }
                "</tr>";
            }
            ?>
        </table>


        <input type='submit' name='enviar' value='Enviar'>

    </form>
<?php

} else {

    if (isset($_POST['enviar']) && !isset($_POST['localidades'])) {
        echo "<p style='color:red'>Debe seleccionar al menos una localidad</p>";
        echo "<a href='index.php'>Volver</a>";
    } else if (!isset($_POST['zona'])) {
        echo "<p style='color:red'>Debe seleccionar una zona</p>";
        echo "<a href='index.php'>Volver</a>";
    } else {
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


</body>

</html>