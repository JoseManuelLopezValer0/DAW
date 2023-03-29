<?php

if (isset($_POST['enviar'])) {
    $min = $_POST['min'];
    $max = $_POST['max'];
    $numero = rand($min, $max);
    echo "El número aleatorio es: $numero";
    echo "<br><a href='index.php'>Volver</a>";
} else {
    echo "<form action='index.php' method='post'>
    <label for='min'>Introduce el número mínimo</label>
    <input type='number' name='min' id='min'>
    <br>
    <label for='max'>Introduce el número máximo</label>
    <input type='number' name='max' id='max'>
    <br>
    <input type='submit' name='enviar' value='Enviar'>
    </form>";
}

?>