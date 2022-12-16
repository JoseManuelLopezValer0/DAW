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


if (isset($_POST['eliminar'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM bookmarks WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute(array(":id" => $id));
    header("Location: bookmarks.php");
}
?>

<html>

<head>
    <title>Bookmarks</title>
</head>

<body>
    <h1>Bookmarks</h1>
    <div>
        <form action="eliminar.php" method="post">
        <!-- listar todos y poner un checkbox para poder seleccionarlos -->
        <?php
        $user = $_SESSION['user'];
        $sql = "SELECT * FROM bookmarks WHERE idUsuario = :idUsuario";
        $stmt = $db->prepare($sql);
        $stmt->execute(array(":idUsuario" => $user));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            echo "<input type='checkbox' name='id' value='" . $row['id'] . "' />" . $row['bm_url'] . "<br>";
        }
        ?>
            <input type="submit" name="eliminar" value="Eliminar" />

    </div>
</body>

</html>