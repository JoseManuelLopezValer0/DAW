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
    $desbloquear = $_POST['desbloquear'];
    foreach ($desbloquear as $id) {
        $sql = "UPDATE usuarios SET bloqueado = 0 WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    header('Location: desbloqueo.php');
}

?>

<html>

<head>
    <title>Bookmarks</title>
</head>

<body>
    <h1>Bookmarks</h1>
    <a href="index.php">Volver</a><br>
    <div>
        <?php
        $sql = "SELECT * FROM usuarios WHERE bloqueado = 1";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            echo "<form action='desbloqueo.php' method='post'>";
            echo "<table>";
            echo "<tr><th>Usuario</th><th>Desbloquear</th></tr>";
            foreach ($result as $row) {
                echo "<tr><td>" . $row['user'] . "</td>";
                echo "<td><input type='checkbox' name='desbloquear[]' value='" . $row['id'] . "'></td>";
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