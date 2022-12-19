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


if (isset($_POST['anadir'])) {
    $url = $_POST['bm_url'];
    $descripcion = $_POST['descripcion'];
    $user = $_SESSION['idUsuario'];
    $sql = "INSERT INTO bookmarks (bm_url, descripcion, idUsuario) VALUES ('$url', '$descripcion', '$user')";
    $stmt = $db->prepare($sql);
    $stmt -> execute(array(":bm_url" => $url,":descripcion" => $descripcion, ":idUsuario" => $user));
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        echo "Bookmark añadido";
    } else {
        echo "Error al añadir bookmark";
    }
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
        <form action="anadir.php" method="post">
            <label for="url">URL</label>
            <input type="text" name="url" id="url" />
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" />
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" />
            <input type="submit" name="anadir" value="Añadir" />
        </form>
    </div>
</body>

</html>
