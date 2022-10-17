<?php

/**
 * Documentacion:
 * 
 * Creamos un bucle para mostrar las tablas de multiplicar y los huecos para rellenar.
 *  @author:LopezValero
 */
$input=0;
$inp = 5;
$aleatorio = array();
for ($i = 0; $i < $inp; $i++) {
    do {
        $f = random_int(1, 10);
        $c = random_int(1, 10);
    } while (in_array(array('f' => $f, 'c' => $c), $aleatorio));
    $aleatorio[] = array('f' => $f, 'c' => $c);
}

echo "<form action='Tabla-formularios.php' method='post'>";
echo "<table border='1'>";
for ($e = 0; $e < 11; $e++) {
    echo "<td>" . $e . "</td>";
}
for ($i = 1; $i < 11; $i++) {
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    for ($j = 1 ; $j < 11; $j++) {
        if (in_array(array('f' => $i, 'c' => $j), $aleatorio)) {
            echo "<td><input type='text' name='f" . $i . "c" . $j . "' size='1'></td>";
        } else {
            echo "<td>" . $i * $j . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
echo "<input name='n[$f]' type='submit' value='Comprobar'>";
echo "<input type='submit' value='Reiniciar' onclick='location.reload()'>";
echo "</form>";

echo ("<br/>");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="JoseManuel">
    <title>Tabla de multiplicar - Jose Manuel Lopez Valero</title>
</head>
<body>
    
</body>
<footer>
    <h1>Jose Manuel Lopez Valero</h1>
    <a href="https://github.com/JoseManuelLopezValer0/DAW/blob/main/DAW/DWES/UD3/Formularios/Tabla-formularios.php" target='_blank'> Repositorio</a>
</footer>
</html>

