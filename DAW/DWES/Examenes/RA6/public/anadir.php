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
    $url = $_POST['url'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $user = $_SESSION['user'];
    $sql = "INSERT INTO bookmarks (url, titulo, descripcion, categoria, user) VALUES (:url, :titulo, :descripcion, :categoria, :user)";
    $stmt = $db->prepare($sql);
    $stmt->execute(array(":url" => $url, ":titulo" => $titulo, ":descripcion" => $descripcion, ":categoria" => $categoria, ":user" => $user));
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
    <div>
        <form action="anadir.php" method="post">
            <label for="url">URL</label>
            <input type="text" name="url" id="url" />
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" />
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" />
            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" id="categoria" />
            <input type="submit" name="anadir" value="Añadir" />
        </form>
    </div>
</body>

</html>
