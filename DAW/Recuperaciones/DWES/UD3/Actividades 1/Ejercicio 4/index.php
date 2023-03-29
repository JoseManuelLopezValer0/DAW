<?php

if (isset($_POST['enviar'])) {
    $votos = [];
    for ($i = 1; $i <= 10; $i++) {
        $votos[$i] = $_POST["item$i"];
    }
    $max = max($votos);
    $mejor = array_search($max, $votos);
    if ($mejor < 10) {
        $mejor = "0$mejor";
    } else {
        $mejor = "$mejor";
    }
    echo "El item mejor valorado es el $mejor con $max votos";
    echo "<br><a href='index.php'>Volver</a>";
} else {
    echo "<form action='index.php' method='post'>";
    for ($i = 1; $i <= 10; $i++) {
        if ($i < 10) {
            echo "<label for='item$i'>Item 0$i :</label>
            <input type='radio' name='item$i' value='1' id='item$i'>
            <input type='radio' name='item$i' value='2' id='item$i'>
            <input type='radio' name='item$i' value='3' id='item$i'>
            <input type='radio' name='item$i' value='4' id='item$i'>
            <input type='radio' name='item$i' value='5' id='item$i'>
            <br>";
        } else {
            echo "<label for='item$i'>Item $i :</label>
            <input type='radio' name='item$i' value='1' id='item$i'>
            <input type='radio' name='item$i' value='2' id='item$i'>
            <input type='radio' name='item$i' value='3' id='item$i'>
            <input type='radio' name='item$i' value='4' id='item$i'>
            <input type='radio' name='item$i' value='5' id='item$i'>
            <br>";
        }
    }
    echo "<input type='submit' name='enviar' value='Enviar'>
    </form>";
}