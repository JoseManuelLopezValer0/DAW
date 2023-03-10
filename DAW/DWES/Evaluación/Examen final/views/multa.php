<html>

<head>
  <title>Crear multa</title>
</head>

<body>
  <?php
  require_once '../app/config/config.php';
  session_start();
  if (isset($_POST['Crear'])) {
    $conductor = $_POST['conductor'];
    $matricula = $_POST['matricula'];
    $fecha = $_POST['fecha'];
    $tipo = $_POST['tipo'];
    $descripcion = $_POST['descripcion'];

    $conexion = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if (!$conexion) {
      die("Error de conexion: " . mysqli_connect_error());
    }

    $sql = "SELECT `importe` FROM `tipo_sanciones` WHERE `id` = '$tipo'";
    $resultado = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_assoc($resultado);
    $importe = $fila['importe'];

    $agente = $_SESSION['usuario']['id'];

    $sql = "INSERT INTO `multas`(`id` , `id_agente` , `id_conductor` , `matricula` , `id_tipo_sanciones` , `descripcion` , `fecha` , `importe` , `descuento` , `estado`)VALUES(NULL , '$agente' , '$conductor' , '$matricula' , '$tipo' , '$descripcion' , '$fecha' , '$importe' , '0' , 'Pendiente')";
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado) {
      header("Location: index_view.php");
    } else {
      echo "Error al crear la multa";
    }
  }

  ?>
  <h1>Crear multa</h1>
  <form action="multa.php" method="post">
    <label for="conductor">Conductor</label>
    <select name="conductor" id="conductor">
      <?php

      require_once '../app/config/config.php';
      $conexion = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
      if (!$conexion) {
        die("Error de conexion: " . mysqli_connect_error());
      }

      $sql = "SELECT `id`, `nombre` FROM `usuarios` WHERE `perfil` = 'conductor'";
      $conductores = mysqli_query($conexion, $sql);
      while ($conductor = mysqli_fetch_assoc($conductores)) {
        echo "<option value='$conductor[id]'>$conductor[nombre]</option>";
      }
      ?>
    </select>
    <br>
    <label for="matricula">Matricula</label>
    <input type="text" name="matricula" id="matricula">
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha" id="fecha">
    <br>
    <label for="tipo">Tipo</label>
    <input type="radio" name="tipo" id="tipo" value="1">Leve
    <input type="radio" name="tipo" id="tipo" value="2">Grave
    <input type="radio" name="tipo" id="tipo" value="3">Muy grave
    <br>
    <label for="descripcion">Descripcion</label>
    <br>
    <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" name="Crear" value="Crear">
  </form>
</body>