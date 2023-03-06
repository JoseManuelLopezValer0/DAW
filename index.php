<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<?php
include_once "lib/cabecera.html";
?>

<body>
  <main>
    <h1>Pagina de Jose Manuel Lopez Valero</h1>
    <br>
    <?php
    // mostramos la estructura de directorios
    function directorios()
    {
      $ruta = "DAW";
      // Se comprueba que realmente sea la ruta de un directorio
      if (is_dir($ruta)) {
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        // Recorre todos los elementos del directorio del directorio actual
        while (($carpeta = readdir($gestor)) !== false) {
          $ruta_completa = $ruta . "/" . $carpeta;
          // Se muestran todas las carpetas excepto ".", "..",".git","config", "css","lib","icon","js","img","fonts","assets", "data" y "doc"
          if (is_dir($ruta_completa) && $carpeta != "." && $carpeta != ".." && $carpeta != ".git" && $carpeta != "config" && $carpeta != "css" && $carpeta != "lib" && $carpeta != "icon" && $carpeta != "js" && $carpeta != "img" && $carpeta != "fonts" && $carpeta != "assets" && $carpeta != "data" && $carpeta != "doc") {
            echo "<li class='lilista'><a class ='alista'href='$ruta_completa'><span class='spanlista'>$carpeta</span></a></li>";
          }
        }

        // Cierra el gestor de directorios
        closedir($gestor);
      } else {
        echo "No es una ruta de directorio valida<br/>";
      }
    }
    directorios();
    ?>
    <footer>
      <h3>Para saber como es la indexzacion de los directorios, mira el codigo en <a href="DAW/config/">config</a></h3>
    </footer>
  </main>
  <div class="social">
    <a href="https://github.com/JoseManuelLopezValer0"><img src="img/git.png"></a>
    <a href="https://www.instagram.com/jmlg_a3d/"><img src="img/int.png"></a>
    <a href="https://twitter.com/L0p3zVal3r012"><img src="img/twt.png"></a>
  </div>
</body>

</html>