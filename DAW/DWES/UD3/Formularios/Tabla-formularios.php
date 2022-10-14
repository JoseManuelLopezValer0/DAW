<?php

/**
 * Documentacion:
 * 
 * Creamos un bucle para mostrar las tablas de multiplicar
 *  @author:LopezValero
 */

// 5 numeros aleatorios sin repetir
$inp = 5;
$aleatorio = array();
for ($i = 0; $i < $inp; $i++) {
    do {
        $f = random_int(1, 10);
        $c = random_int(1, 10);
    } while (in_array(array('f' => $f, 'c' => $c), $aleatorio));
    $aleatorio[] = array('f' => $f, 'c' => $c);
}

// datos del array aleatorios
// foreach ($aleatorio as $key => $value) {
//     echo $aleatorio[$key]['f'] . " x " . $aleatorio[$key]['c'] . " = " . $aleatorio[$key]['f'] * $aleatorio[$key]['c'] . "<br>";
// }


//tabla con los huecos segun el array
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
echo "<input type='submit' value='Comprobar'>";
echo "<input type='submit' value='Reiniciar' onclick='location.reload()'>";


echo ("<br/>");
$url = "https://github.com/JoseManuelLopezValer0/DAW/blob/main/DAW/DWES/UD3/Formularios/Tabla-formularios.php";
echo ("<a href=$url target='_blank'> Repositorio</a>");
?>