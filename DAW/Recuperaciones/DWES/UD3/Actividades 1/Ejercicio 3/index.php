<?php

if (isset($_POST['enviar'])) {
    $operacion = $_POST['operacion'];
    $resultado = $_POST['resultado'];
    $resultadoReal = eval("return $operacion;");
    if ($resultado == $resultadoReal) {
        echo "La operación es correcta";
    } else {
        echo "La operación es incorrecta";
    }
    echo "<br><a href='index.php'>Volver</a>";
} else {
    $operacion = "";
    $resultado = "";
    $operadores = ["+", "-", "*", "/"];
    $operador = $operadores[rand(0, 3)];
    $num1 = rand(0, 100);
    $num2 = rand(0, 100);
    $operacion = "$num1 $operador $num2";
    echo "<form action='index.php' method='post'>
    <label for='operacion'>$operacion</label>
    <input type='number' name='resultado' id='resultado'>
    <br>
    <input type='hidden' name='operacion' value='$operacion'>
    <input type='submit' name='enviar' value='Enviar'>
    </form>";
}