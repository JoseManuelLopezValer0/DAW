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
// Pagina de login 
// Inicio de sesión
session_start();

// Si existe la variable de sesión, se redirige al usuario a la página de inicio
if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
}

// Si no existe la variable de sesión, se muestra el formulario de login
else {
    echo "<h1>Login</h1>";
    echo "<form action='login.php' method='post'>";
    echo "<p>Usuario: <input type='text' name='usuario'></p>";
    echo "<p>Contraseña: <input type='password' name='password'></p>";
    echo "<input type='submit' value='Enviar'>";
    echo "</form>";
}

//Boton de registro
echo "<form action='signup.php' method='post'>";
echo "<input type='submit' value='Registro'>";
echo "</form>";

// Si se ha enviado el formulario, se comprueba el usuario y la contraseña con la base de datos
if (isset($_POST['usuario']) && isset($_POST['password'])) {
    // Se comprueba si el usuario existe
    if (existeUsuario($_POST['usuario'])) {
        // Se comprueba si la contraseña es correcta
        if (comprobarPassword($_POST['usuario'], $_POST['password'])) {
            // Se crea la variable de sesión
            $_SESSION['usuario'] = $_POST['usuario'];
            // Se redirige al usuario a la página de inicio
            header("Location: index.php");
        }
        // Si la contraseña no es correcta, se muestra un mensaje de error
        else {
            echo "<p>La contraseña no es correcta</p>";
        }
    }
    // Si el usuario no existe, se muestra un mensaje de error
    else {
        echo "<p>El usuario no existe</p>";
    }
}

