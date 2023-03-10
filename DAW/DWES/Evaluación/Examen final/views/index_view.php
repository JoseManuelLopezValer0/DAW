<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Gestion de multas</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<?php

require_once '../app/config/config.php';


session_start();

$_SESSION['usuario']['perfil'] = 'invitado';
// $_SESSION['usuario']['id'] = 1;


if (!isset($_SESSION['usuario']['perfil'])) {
  $_SESSION['usuario']['perfil'] = 'invitado';
}

$procesarFormulario = false;

if (isset($_POST['enviar']) && !isset($_POST['username']) && !isset($_POST['password'])) {
    $procesarFormulario = false;
} else if (isset($_POST['enviar']) && !isset($_POST['figura'])) {
    $procesarFormulario = false;
} else if (isset($_POST['enviar'])) {
    $procesarFormulario = true;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $figurap = $_POST['figura'];

    if ($figura == $figurap) {
        $conexion = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
        if (!$conexion) {
            die("Error de conexion: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
        $resultado = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($resultado) > 0) {
            $Validar = true;
            $fila = mysqli_fetch_assoc($resultado);
            $_SESSION['usuario']['perfil'] = $fila['perfil'];
            $_SESSION['usuario']['id'] = $fila['id'];
        } else {
            $Validar = false;
        }
    } else {
        $procesarFormulario = false;
    }
}

?>

<body>
  <?php
  if (isset($_SESSION['usuario']['perfil'])) {
    if ($_SESSION['usuario']['perfil'] == 'admin') {
      require_once 'listadoConductores.php';
    } else if ($_SESSION['usuario']['perfil'] == 'agente') {
      require_once 'listadoMultas.php';
    } else if ($_SESSION['usuario']['perfil'] == 'conductor') {
      require_once 'listadoMultas.php';
    } else {
      require_once 'login.php';
    }
  } else {
    require_once 'login.php';
  }

  ?>
</body>