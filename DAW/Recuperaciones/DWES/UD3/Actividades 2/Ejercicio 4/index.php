<?php
$alumnos = array(
    "Juan" => array(
        "Eval1" => array(
            "DWES" => 8,
            "DWEC" => 7,
            "DAW" => 6,
            "DIW" => 5,
            "EIE" => 4
        ),
        "Eval2" => array(
            "DWES" => 8,
            "DWEC" => 7,
            "DAW" => 2,
            "DIW" => 5,
            "EIE" => 4
        )
    ),
    "Pedro" => array(
        "Eval1" => array(
            "DWES" => 4,
            "DWEC" => 7,
            "DAW" => 6,
            "DIW" => 5,
            "EIE" => 4
        ),
        "Eval2" => array(
            "DWES" => 9,
            "DWEC" => 7,
            "DAW" => 6,
            "DIW" => 5,
            "EIE" => 9
        )
    ),
    "Luis" => array(
        "Eval1" => array(
            "DWES" => 8,
            "DWEC" => 7,
            "DAW" => 6,
            "DIW" => 5,
            "EIE" => 5
        ),
        "Eval2" => array(
            "DWES" => 8,
            "DWEC" => 7,
            "DAW" => 1,
            "DIW" => 5,
            "EIE" => 4
        )
    ),
);

echo "<table border='1'>
<tr>
<th>Menu</th>
</tr>
<tr>
<td><a href='index.php?menu=1'>Listados de alumnos con las notas de la primera y segunda evaluación, junto con su nota media.</a></td>
</tr>
<tr>
<td><a href='index.php?menu=2'>Asignatura con mayor número de aprobados.</a></td>
</tr>
<tr>
<td><a href='index.php?menu=3'>Asignatura con mayor número de suspensos.</a></td>
</tr>
<tr>
<td><a href='index.php?menu=4'>Número de aprobados en cada asignatura.</a></td>
</tr>
<tr>
<td><a href='index.php?menu=5'>Generación de boletines de notas en función de la evaluación seleccionada en una lista desplegable.</a></td>
</tr>
<tr>
<td><a href='../'>Volver</a></td>
</tr>
</table>";

if (isset($_GET["menu"]) && $_GET["menu"] == 1) {
    echo "<br>";
    echo "<table border='1'>";
    echo "<tr>
        <th>Alumno</th>
        <th>Eval1</th>
        <th>Eval2</th>
        <th>Media</th>
    </tr>";
    foreach ($alumnos as $alumno => $evaluaciones) {
        echo "<tr>
            <td>$alumno</td>";
        foreach ($evaluaciones as $evaluacion => $asignaturas) {
            echo "<td>";
            $suma = 0;
            foreach ($asignaturas as $asignatura => $nota) {
                echo "$asignatura: $nota<br>";
                $suma += $nota;
            }
            $media = $suma / count($asignaturas);
            echo "</td>";
        }
        echo "<td>$media</td>";
        echo "</tr>";
    }
    echo "</table>";
}

if (isset($_GET["menu"]) && $_GET["menu"] == 2) {
    echo "<br>";
    $aprobados = array();
    foreach ($alumnos as $alumno => $evaluaciones) {
        foreach ($evaluaciones as $evaluacion => $asignaturas) {
            foreach ($asignaturas as $asignatura => $nota) {
                if ($nota >= 5) {
                    if (isset($aprobados[$asignatura])) {
                        $aprobados[$asignatura]++;
                    } else {
                        $aprobados[$asignatura] = 1;
                    }
                }
            }
        }
    }
    $max = 0;
    $asignatura = "";
    foreach ($aprobados as $asig => $num) {
        if ($num > $max) {
            $max = $num;
            $asignatura = $asig;
        }
    }
    echo "La asignatura con más aprobados es $asignatura con $max aprobados.";
    echo "<br>";
    echo "<table border='1'>";
    echo "<tr>
        <th>Asignatura</th>
        <th>Aprobados</th>
    </tr>";
    foreach ($aprobados as $asignatura => $num) {
        echo "<tr>
            <td>$asignatura</td>
            <td>$num</td>
        </tr>";
    }
}

if (isset($_GET["menu"]) && $_GET["menu"] == 3) {
    echo "<br>";
    $suspensos = array();
    foreach ($alumnos as $alumno => $evaluaciones) {
        foreach ($evaluaciones as $evaluacion => $asignaturas) {
            foreach ($asignaturas as $asignatura => $nota) {
                if ($nota < 5) {
                    if (isset($suspensos[$asignatura])) {
                        $suspensos[$asignatura]++;
                    } else {
                        $suspensos[$asignatura] = 1;
                    }
                }
            }
        }
    }
    $max = 0;
    $asignatura = "";
    foreach ($suspensos as $asig => $num) {
        if ($num > $max) {
            $max = $num;
            $asignatura = $asig;
        }
    }
    echo "La asignatura con más suspensos es $asignatura con $max suspensos.";
    echo "<br>";
    echo "<table border='1'>";
    echo "<tr>
        <th>Asignatura</th>
        <th>Suspensos</th>
    </tr>";
    foreach ($suspensos as $asignatura => $num) {
        echo "<tr>
            <td>$asignatura</td>
            <td>$num</td>
        </tr>";
    }
}

if (isset($_GET["menu"]) && $_GET["menu"] == 4) {
    echo "<br>";
    $aprobados = array();
    foreach ($alumnos as $alumno => $evaluaciones) {
        foreach ($evaluaciones as $evaluacion => $asignaturas) {
            foreach ($asignaturas as $asignatura => $nota) {
                if ($nota >= 5) {
                    if (isset($aprobados[$asignatura])) {
                        $aprobados[$asignatura]++;
                    } else {
                        $aprobados[$asignatura] = 1;
                    }
                }
            }
        }
    }
    echo "<table border='1'>";
    echo "<tr>
        <th>Asignatura</th>
        <th>Aprobados</th>
    </tr>";
    foreach ($aprobados as $asignatura => $num) {
        echo "<tr>
            <td>$asignatura</td>
            <td>$num</td>
        </tr>";
    }
    echo "</table>";
}

if (isset($_GET["menu"]) && $_GET["menu"] == 5) {
    echo "<br>";
    echo "<form action='index.php' method='get'>
        <select name='evaluacion'>
            <option value='Eval1'>Eval1</option>
            <option value='Eval2'>Eval2</option>
        </select>
        <select name='alumno'>";
    foreach ($alumnos as $alumno => $evaluaciones) {
        echo "<option value='$alumno'>$alumno</option>";
    }
    echo "</select>
    <input type='hidden' name='menu' value='5'>
        <input type='submit' value='Enviar'>
    </form>";
    if (isset($_GET["evaluacion"])) {
        $evaluacion = $_GET["evaluacion"];
        $alumno = $_GET["alumno"];
        echo "<h2>Boletín de $alumno en $evaluacion</h2>";
        echo "<table border='1'>";
        echo "<tr>
            <th>Asignatura</th>
            <th>Nota</th>
        </tr>";
        foreach ($alumnos[$alumno][$evaluacion] as $asignatura => $nota) {
            echo "<tr>
                <td>$asignatura</td>
                <td>$nota</td>
            </tr>";
        }
        echo "</table>";
        echo "<p>Imprimir boletín</p>";
        echo "<a href='index.php?menu=5&evaluacion=$evaluacion&alumno=$alumno&imprimir=1'>Imprimir</a>";
    }
}

if (isset($_GET["imprimir"]) && $_GET["imprimir"] == 1) {
    // imprime la tabla
    echo "<script>window.print();</script>";
}