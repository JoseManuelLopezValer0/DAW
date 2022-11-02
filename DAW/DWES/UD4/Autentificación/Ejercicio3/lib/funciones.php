<?php

/**
 * Docuemntacion:
 * 
 * Archivo de funciones del archivo php.
 * 
 * @author Jose Manuel Lopez Valero
 * @version 1.0
 * 
 */
// conetar a la base de datos
function conect()
{
    $con = mysqli_connect("localhost", "root", "", "daw");
    if (!$con) {
        die("No se ha podido conectar a la base de datos");
    }
    return $con;
}

// comprobar usuario
function comprobarUsuario($usuario, $password){
    $con = conect();
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

// Registrar usuario
function registrarUsuario($usuario, $correo , $password){
    $con = conect();
    $sql = "INSERT INTO usuarios (usuario, password, perfil) VALUES ('$usuario', '$correo', '$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}


function existeUsuario($usuario)
{
    $con = conect();
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

function comprobarPassword($usuario, $password)
{
    $con = conect();
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

function esAdmin($usuario)
{
    $con = conect();
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }

}
//comprobamos que la contraseña introducida por el alert es igual que la contraseña de administracion la cual es Admin1234@ 
function comprobarPasswordA($password)
{
    if ($password == "Admin1234@") {
        return true;
    } else {
        return false;
    }
}