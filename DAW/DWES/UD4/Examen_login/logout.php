<?php
session_start();
$_SESSION['usuario'] = 'invitado';
unset($_SESSION['carrito']);
header("Location: index.php");