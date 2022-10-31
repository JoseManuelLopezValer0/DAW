<?php

/**
 * 
 * Archivo de funciones
 * 
 * @author: Jose Manuel
 * @version: 1.0
 * 
 */

function localidadesOcupadas()
{
    $localidadesSocios = array();
    for ($i = 0; $i < NumeroAbonos; $i++) {
        $localidadesSocios[] = rand(1, 400);
    }
    return $localidadesSocios;
}
function mostrarLocalidades($localidadesSocios)
{
    echo "<br>";
    switch 
    (isset($_POST['zona'])) {
        case 'A':
            $i=1;
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
            break;
        case 'B':
            $i=101;
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
            break;
        case 'C':
            $i=201;
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
            break;
        case 'D':
            $i=301;
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
            break;
    }
}
