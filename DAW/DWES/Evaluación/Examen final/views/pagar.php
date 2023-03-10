<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Gestion de multas</title>
</head>

<body>
    <h1>Pagar multa</h1>
    <?php

    require_once '../app/config/config.php';

    $conexion = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if (!$conexion) {
        die("Error de conexion: " . mysqli_connect_error());
    }

    if (isset($_POST['id']) && !isset($_POST['Pagar'])) {
        echo "Error al pagar la multa";
    }
    if (isset($_POST['id'])) {
        $sql = "UPDATE `multas` SET `estado` = 'Pagada' WHERE `multas`.`id` = '$_POST[id]'";
        $resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
            header("Location: index_view.php");
        } else {
            echo "Error al pagar la multa";
        }
    }

    $sql = "SELECT `multas`.*, `tipo_sanciones`.*\n". "FROM `multas` \n" . "LEFT JOIN `tipo_sanciones` ON `multas`.`id_tipo_sanciones` = `tipo_sanciones`.`id` \n" . "WHERE `multas`.`id` = '$_GET[id]'";
    $resultado = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_assoc($resultado);

    $sql = "SELECT `nombre` FROM `usuarios` WHERE `id` = '$fila[id_conductor]'";
    $conductores = mysqli_query($conexion, $sql);
    echo "<table>";
    echo "<tr>";
    echo "<th>Id multa</th>";
    echo "<td>" . $_GET['id'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Matricula</th>";
    echo "<td>" . $fila['matricula'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Condutor</th>";
    echo "<td>" . mysqli_fetch_assoc($conductores)['nombre'] . "</td>";
    echo "<tr>";
    echo "<th>Tipo sanciones</th>";
    echo "<td>" . $fila['tipo'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Descripcion</th>";
    echo "<td>" . $fila['descripcion'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Fecha</th>";
    echo "<td>" . $fila['fecha'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Importe</th>";
    echo "<td>" . $fila['importe'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Descuento</th>";
    echo "<td>" . $fila['descuento'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Estado</th>";
    echo "<td>" . $fila['estado'] . "</td>";
    echo "</tr>";
    echo "</table>";

    echo "<form action='pagar.php' method='post'>";
    echo "<input type='hidden' name='id' value='" . $_GET['id'] . "'/>";
    echo "<input type='submit' value='Pagar'/>";
    echo "</form>";

    echo "<br/>";
    ?>
</body>

</html>