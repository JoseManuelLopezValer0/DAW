<html>

<head>
  <meta charset="UTF-8">
  <title>Listado de multas</title>
</head>

<body>

  <?php
  require_once '../app/config/config.php';



  if (!isset($_SESSION['usuario']['perfil'])) {
  }
  if ($_SESSION['usuario']['perfil'] == 'agente') {
    $conexion = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if (!$conexion) {
      die("Error de conexion: " . mysqli_connect_error());
    }

    $sql = "SELECT nombre FROM usuarios WHERE id = " . $_SESSION['usuario']['id'];
    $resultadoAgente = mysqli_query($conexion, $sql);

    $sql = "SELECT * FROM multas";
    $resultado = mysqli_query($conexion, $sql);
    $numMultas = mysqli_num_rows($resultado);

    $sql = "SELECT * FROM multas WHERE id_agente = " . $_SESSION['usuario']['id'];
    $resultado = mysqli_query($conexion, $sql);
    $numMultasAgente = mysqli_num_rows($resultado);

    $coeficiente = $numMultasAgente / $numMultas * 100;

    echo "Agente: " . mysqli_fetch_assoc($resultadoAgente)['nombre'] . " Coeficiente: " . $coeficiente . "<br>";
    echo "<br/>";

    echo "Listado de multas. " . " <input type='button' value='Nueva multa' onclick='location.href=\"multa.php\"' />";

    echo "<br/>";
    echo "<br/>";

    echo "<table>";
    echo "<tr>";
    echo "<th>Matricula</th>";
    echo "<th>Descripcion</th>";
    echo "<th>Fecha</th>";
    echo "</tr>";

    $sql = "SELECT * FROM multas WHERE id_agente = " . $_SESSION['usuario']['id'];
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
      while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['matricula'] . "</td>";
        echo "<td>" . $fila['descripcion'] . "</td>";
        echo "<td>" . $fila['fecha'] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='5'>No hay multas</td></tr>";
    }
    mysqli_close($conexion);
  } else 
            if ($_SESSION['usuario']['perfil'] == 'conductor') {
    $conexion = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if (!$conexion) {
      die("Error de conexion: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM multas WHERE id_conductor = " . $_SESSION['usuario']['id'];
    $resultado = mysqli_query($conexion, $sql);

    echo "<table>";
    echo "<tr>";
    echo "<th>Matricula</th>";
    echo "<th>Descripcion</th>";
    echo "<th>Fecha</th>";
    echo "<th>Estado</th>";
    echo "<th>Pagar</th>";
    echo "</tr>";

    if (mysqli_num_rows($resultado) > 0) {
      while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['matricula'] . "</td>";
        echo "<td>" . $fila['descripcion'] . "</td>";
        echo "<td>" . $fila['fecha'] . "</td>";
        echo "<td>" . $fila['estado'] . "</td>";
        if ($fila['estado'] == 'Pendiente') {
          echo "<td><a href='pagar.php?id=" . $fila['id'] . "'>Pagar</a></td>";
        } else {
          echo "<td></td>";
        }
        echo "</tr>";
      }
    } else {
      echo "0 resultados";
    }
    mysqli_close($conexion);
  }
  ?>
  </table>
</body>

</html>