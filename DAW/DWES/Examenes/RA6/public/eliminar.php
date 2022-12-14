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
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        echo "Bookmark eliminado";
    } else {
        echo "Error al eliminar bookmark";
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
        <form action="eliminar.php" method="post">
            <label for="id">ID</label>
            <input type="text" name="id" id="id" />
            <input type="submit" name="eliminar" value="Eliminar" />
        </form>
    </div>
</body>

</html>