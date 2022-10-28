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

// Desarrolla un sistema de registro y autentificación que incluya distintos perfiles de usuarios. Crea un menú de opciones y páginas correspondientes en función del perfil.

// Inicio de sesión
session_start();

// Si no existe la variable de sesión, se redirige al usuario a la página de login

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
}

// Si existe la variable de sesión, se compeueba si es admin y se muestra su menú

if (isset($_SESSION['usuario'])) {
    if (esAdmin($_SESSION['usuario'])) {
        echo "<h1>Menú de administrador</h1>";
        echo "<ul>";
        echo "<li><a href='index.php'>Inicio</a></li>";
        echo "<li><a href='alta.php'>Alta de usuario</a></li>";
        echo "<li><a href='baja.php'>Baja de usuario</a></li>";
        echo "<li><a href='modificar.php'>Modificar usuario</a></li>";
        echo "<li><a href='listar.php'>Listar usuarios</a></li>";
        echo "<li><a href='lib/logout.php'>Cerrar sesión</a></li>";
        echo "</ul>";
    }
}

// Si existe la variable de sesión, se comprueba si es otro usuario y se muestra su menú

if (isset($_SESSION['usuario'])) {
    if (!esAdmin($_SESSION['usuario'])) {
        echo "<h1>Menú de usuario</h1>";
        echo "<ul>";
        echo "<li><a href='index.php'>Inicio</a></li>";
        echo "<li><a href='lib/logout.php'>Cerrar sesión</a></li>";
        echo "</ul>";
    }
}

