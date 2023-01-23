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
$msgError = "";

$_SESSION['user'] = 'invitado';

$db = conectaDB();
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

?>

<html>

<head>
    <title>Bookmarks</title>
</head>

<body>
    <h1>Bookmarks</h1>
    <div>
        <?php
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user'] == 'invitado') {
                echo '<form action="index.php" method="post">
                <label for="user">Usuario</label>
                <input type="text" name="user" id="user">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password">
                <input type="submit" name="login" value="Login">
                </form>';
                echo $msgError;
            } elseif ($_SESSION['user'] != 'invitado') {
                if ($_SESSION['user'] == 'admin') {
                    echo 'usuario : ' . $_SESSION['user'] . ' <a href="logout.php">Cerrar sesión</a> <a href="desbloqueo.php">Desbloquear usuario</a> añadir <a href="anadir.php">añadir</a> eliminar <a href="eliminar.php">eliminar</a>';
                    $sql = "SELECT * FROM bookmarks WHERE user = admin";
                    $stmt = $db->prepare($sql);
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    echo "<br>";
                    if ($result) {
                        echo "<table border='1'>";
                        echo "<tr><th>URL</th><th>Descripción</th></tr>";
                        foreach ($result as $row) {
                            echo "<tr><td><a href='" . $row['bm_url'] . "'>" . $row['bm_url'] . "</a></td><td>" . $row['description'] . "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "No hay bookmarks";
                    }
                } else {
                    echo 'usuario : ' . $_SESSION['user'] . ' <a href="logout.php">Cerrar sesión</a> añadir <a href="anadir.php">añadir</a> eliminar <a href="eliminar.php">eliminar</a>';
                    $sql = "SELECT * FROM bookmarks WHERE user = :user";
                    $stmt = $db->prepare($sql);
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    echo "<br>";
                    if ($result) {
                        echo "<table border='1'>";
                        echo "<tr><th>URL</th><th>Descripción</th></tr>";
                        foreach ($result as $row) {
                            echo "<tr><td><a href='" . $row['bm_url'] . "'>" . $row['bm_url'] . "</a></td><td>" . $row['description'] . "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "No hay bookmarks";
                    }
                }
            }
        } else {
            echo '<form action="index.php" method="post">
            <label for="user">Usuario</label>
            <input type="text" name="user" id="user">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            <input type="submit" name="login" value="Login">
            </form>';
            echo $msgError;
        }
        ?>
    </div>
</body>

</html>