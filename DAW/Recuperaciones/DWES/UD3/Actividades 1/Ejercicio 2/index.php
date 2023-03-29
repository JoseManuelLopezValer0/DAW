<?php

if (isset($_POST['enviar'])) {
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if ($pass1 == $pass2) {
        echo "Las contraseñas coinciden";
    } else {
        echo "Las contraseñas no coinciden";
    }
    echo "<br><a href='index.php'>Volver</a>";
} else {
    echo "<form action='index.php' method='post'>
    <label for='pass1'>Introduce la contraseña</label>
    <input type='password' name='pass1' id='pass1'>
    <br>
    <label for='pass2'>Introduce la contraseña de nuevo</label>
    <input type='password' name='pass2' id='pass2'>
    <br>
    <input type='submit' name='enviar' value='Enviar'>
    </form>";
}