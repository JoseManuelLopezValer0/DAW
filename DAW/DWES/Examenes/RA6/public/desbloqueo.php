<?php


/**
 * 
 * Documentacion
 *
 *@author: Jose Manueñl
 * @version: 1.0
 */

include '../app/config.php';
include 'lib/functions.php';

$db = conectaDB();
session_start();


if (isset($_POST['desbloquear'])) {
    $user = $_POST['user'];
    $sql = "UPDATE usuarios SET bloqueado = 0 WHERE user = :user";
    $stmt = $db->prepare($sql);
    $stmt->execute(array(":user" => $user));
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        echo "Usuario desbloqueado";
    } else {
        echo "Error al desbloquear usuario";
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
        $sql = "SELECT * FROM usuarios WHERE bloqueado = 1";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            echo "<form action='desbloqueo.php' method='post'>";
            echo "<table>";
            echo "<tr><th>Usuario</th><th>Desbloquear</th><th>Eliminar</th></tr>";
            foreach ($result as $row) {
                echo "<tr><td>" . $row['user'] . "</td>";
                echo "<td><input type='checkbox' name='desbloquear[]' value='" . $row['user'] . "'></td>";
            }
            echo "</table>";
            echo "<input type='submit' name='desbloquear' value='Desbloquear' />";
            echo "</form>";
        } else {
            echo "No hay usuarios bloqueados";
        }
        ?>
    </div>

</html>