<?php
/**
 * 
 * Documentación:
 * 
 * @autor: Jose Manuel Lopez Valero
 * @version: 1.0
 * 
 */

include "lib/funciones.php";
include "config/config.php";
$password;
// Inicio de sesión
session_start();

// Si el usuario ya está autentificado, se redirige a la página de inicio
if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
}
// Si el usuario no está autentificado, se muestra el formulario de singup 
else {
    echo "<h1>Registro</h1>";
    echo "<form action='singup.php' method='post'>";
    echo "<p>Usuario: <input type='text' name='usuario'></p>";
    echo "<p>Correo: <input type='text' name='correo'></p>";
    echo "<p>Contraseña: <input type='password' name='password'></p>";
    echo "<p>Perfil: <select name='perfil'>";
    echo "<option value='administrador'>Administrador</option>";
    echo "<option value='usuario'>Usuario</option>";
    echo "</select></p>";
    echo "<p><input type='submit' value='Enviar'></p>";
    echo "</form>";
}
//Si se seleccciona la opcion de administrador, se pide una password de administrador en un alert y se comprueba si es correcta, si es asi se registra sino se muestra un mensaje de error
if (isset($_POST['perfil']) && $_POST['perfil'] == 'administrador') {
    $password = $_POST['password'];
    if ($password == 'admin') {
        if (isset($_POST['usuario']) && isset($_POST['correo']) && isset($_POST['password'])) {
            if (existeUsuario($_POST['usuario'])) {
                echo "<p>El usuario ya existe</p>";
            } else {
                registrarUsuario($_POST['usuario'], $_POST['correo'], $_POST['password']);
                echo "<p>Usuario registrado</p>";
            }
        }
    } else {
        echo "<p>La contraseña de administrador no es correcta</p>";
    }
}
//Si se selecciona la opcion de usuario, se registra directamente
if (isset($_POST['perfil']) && $_POST['perfil'] == 'usuario') {
    if (isset($_POST['usuario']) && isset($_POST['correo']) && isset($_POST['password']) && isset($_POST['perfil'])) {
        if (existeUsuario($_POST['usuario'])) {
            echo "<p>El usuario ya existe</p>";
        } else {
            registrarUsuario($_POST['usuario'], $_POST['correo'], $_POST['password'], $_POST['perfil']);
            echo "<p>Usuario registrado</p>";
        }
    }
}