<?php

include('config/config.php');
include('lib/function.php');

session_start();
if (!isset($_SESSION['carrito']) OR ($_SESSION['usuario'] == 'invitado')) {
    header('Location: index.php');
}

$subtitulo = "Selecciona localidades";