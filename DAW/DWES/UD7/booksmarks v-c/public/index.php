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

$_SESSION['user'] = ' ';

if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE user = :user AND psw = :password";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($result) {
        $_SESSION['user'] = $user;
        header('Location: index.php');
    } else {
        $msgError = "Usuario o contraseña incorrectos";
    }
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
        if ($_SESSION['user'] == ' ') {
            echo "<form action='index.php' method='post'>";
            include('lib/login_form.html');
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
        ?>
    </div>
</body>

</html>