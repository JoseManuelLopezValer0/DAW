<?php

/**
 * 
 * Documentación
 * 
 * @author Jose Manuel
 * @version 1.0
 */

include '../app/config.php';
include 'lib/functions.php';

$db = conectaDB();
session_start();
const errores = 0;

if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $result = login($db, $user, $password);
    if ($result) {
        $_SESSION['user'] = $user;
        $_SESSION['errores'] = 0;
    } else {
        $_SESSION['errores']++;
        if ($_SESSION['errores'] == 3) {
            bloquear($db, $user);
            $msgError = "Usuario bloqueado";
        } else {
            $msgError = "Usuario o contraseña incorrectos";
        }
    }
}

function login($db, $user, $password)
{
    $sql = "SELECT * FROM usuarios WHERE user = :user AND psw = :password";
    $stmt = $db->prepare($sql);
    $stmt->execute(array(":user" => $user, ":password" => $password));
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

