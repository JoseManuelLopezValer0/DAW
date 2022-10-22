<?php

/**
 * Docuemntacion:
 * 
 * Creacion de una tabla de multiplicar con un formulario que al rrellenar el numero de la tabla faltante te dice si es correcto o no. 
 * 
 * @author cose Manuel Lopez Valero
 * @version 1.0
 * 
 */
include('config/config.php');
include('lib/funciones.php');

$valoresActuales = array();
$numerosAleatorios = array();

$procesaFormulario = false;
$numAciertos = 0;
$iconoRespuesta = '';
$claseRespuesta = '';

if (isset($_POST['send'])) {
    $procesaFormulario = true;
    foreach ($_POST['num'] as $f => $v1) {
        foreach ($v1 as $c => $v2) {
            $numerosAleatorios[] = array('f' => $f, 'c' => $c);
            $valoresActuales[$f][$c] = $v2;
            if ($valoresActuales[$f][$c] == $f * $c) {
                $numAciertos++;
            }
        }
    }
} else {
    for ($i = 0; $i < NUMEROINPUTS; $i++) {
        do {
            $f = mt_rand(1, NUMEROTABLAS);
            $c = mt_rand(1, NUMEROTABLAS);
        } while (existeCoordenada($f, $c, $numerosAleatorios));
        $numerosAleatorios[] = array('f' => $f, 'c' => $c);
        $valoresActuales[$f][$c] = "";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Completa la tabla</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td class="cabecera">x</td>
                <?php
                for ($i = 1; $i <= NUMEROTABLAS; $i++) {
                    echo "<td class=\"cabecera\">$i</td>";
                }
                echo "</tr>";
                for ($f = 1; $f <= NUMEROTABLAS; $f++) {
                    echo "<tr>";
                    echo "<td class=\"cabecera\">$f</td>";
                    for ($c = 1; $c <= NUMEROTABLAS; $c++) {
                        if (existeCoordenada($f, $c, $numerosAleatorios)) {
                            if ($procesaFormulario) {
                                $iconoRespuesta = $valoresActuales[$f][$c] == $f * $c ? "&#128512" : "&#128534";
                                $claseRespuesta = $valoresActuales[$f][$c] == $f * $c ? "acierto" : "fallo";
                            }
                            echo "<td><input class = \"$claseRespuesta\" title=\"" . $f . 'x' . $c . "\" type=\"text\" name=num[" . $f . "][" . $c . "] value =\"" . $valoresActuales[$f][$c] . "\"/>.$iconoRespuesta</td>";
                        } else {
                            echo "<td>" . $f * $c . "</td>";
                        }
                    }
                }
                echo "</tr>";
                ?>
        </table>
        <input type="submit" name="send" value="send" />
    </form>
    <?php
    if ($procesaFormulario) {
        echo "Aciertos: .$numAciertos";
        if ($numAciertos == NUMEROINPUTS) {
            echo "<br> Enhorabuena, has acertado todas las respuestas</br>";
            echo "<br> <a href=\"" . htmlspecialchars($_SERVER['PHP_SELF']) . "\">Volver a jugar</a></br>";
        }
    }
    ?>
</body>
<footer>
    <a href="https://github.com/JoseManuelLopezValer0/DAW/tree/main/DAW/DWES/UD3/Formularios/tabla%20de%20multiplicar">Repositorio</a>
</footer>
</html>