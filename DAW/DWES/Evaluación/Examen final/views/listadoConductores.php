<!-- Se mostrará un listado de conductores con los puntos de su carnet de conducir y el número de
sanciones impuestas.
Se añadirá un buscador que permita el filtrar los resultados.
Los conductores con 10 puntos aparecerán en rojo con un check box que permita el reinicio de los
puntos. -->

<html>

<head>
    <title>Listado de conductores</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php

    include_once '..\App\config\config.php';

    if (isset($_POST['reiniciar'])) {
        $conexion = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
        if (!$conexion) {
            die("Error de conexion: " . mysqli_connect_error());
        }
        $sql = "UPDATE usuarios SET puntos = '20' WHERE id = " . $_POST['Reiniciar'];
                $resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
            echo "Puntos reiniciados";
        } else {
            echo "Error al reiniciar los puntos";
        }
    }

    ?>
    <h1>Listado de conductores</h1>
    <form action="listadoConductores.php" method="POST">
        <input type="text" name="buscador" placeholder="Buscar">
        <input type="submit" name="buscar" value="Buscar">
    </form>
    <br>
    <form action="listadoConductores.php" method="POST">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Puntos</th>
            <th>Sanciones</th>
            <th>Reiniciar puntos</th>
        </tr>
        <?php
        include_once '..\App\config\config.php';
        $conexion = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
        if (!$conexion) {
            die("Error de conexion: " . mysqli_connect_error());
        }
        if (isset($_POST['buscar'])) {
            $sql = "SELECT * FROM usuarios WHERE nombre LIKE '%" . $_POST['buscador'] . "%'" . " AND perfil = 'conductor'";
        } else {
            $sql = "SELECT * FROM usuarios" . " WHERE perfil = 'conductor'";
        }
        $sql = "SELECT * FROM usuarios" . " WHERE perfil = 'conductor'";
        $resultado = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $fila['puntos'] . "</td>";
                // seleccionamos las multas de cada conductor
                $sql = "SELECT * FROM multas WHERE id_conductor = " . $fila['id'];
                $resultadoMultas = mysqli_query($conexion, $sql);
                echo "<td>" . mysqli_num_rows($resultadoMultas) . "</td>";
                if ($fila['puntos'] == 10) {
                    echo "<td><input type='checkbox' name='reiniciar' value='" . $fila['id'] . "'>reiniciar</td>";
                } else {
                    echo "<td></td>";
                }
                echo "</tr>";
            }
        }
        echo "</table>";
        echo "<input type='submit' name='reiniciar' value='Reiniciar'>";
        echo "</form>";
        ?>
</body>

