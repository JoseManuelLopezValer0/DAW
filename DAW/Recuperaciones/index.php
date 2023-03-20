<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="../../js/main.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Inicio</title>
</head>

<body>
  <div class="contenedor-carga">

    <div class="barra-carga">
      <div class="barra-progreso"></div>
    </div>
  </div>
  <div class="contenido">
    <?php
    
    include_once "../../lib/cabecera.html";
    ?>
    <header>
      <h1>Recuperaciones - Jose Manuel Lopez Valero</h1>
    </header>
    <br>
    <main>
      <?php
      // mostramos la estructura de directorios
      function directorios()
      {
        $ruta = ".";
        if (is_dir($ruta)) {
          $gestor = opendir($ruta);
          while (($carpeta = readdir($gestor)) !== false) {
            $ruta_completa = $ruta . "/" . $carpeta;
            if (
              is_dir($ruta_completa)
              && $carpeta != "."
              && $carpeta != ".."
              && $carpeta != ".git"
              && $carpeta != "config"
              && $carpeta != "css"
              && $carpeta != "lib"
              && $carpeta != "icon"
              && $carpeta != "js"
              && $carpeta != "img"
              && $carpeta != "fonts"
              && $carpeta != "assets"
              && $carpeta != "data"
              && $carpeta != "doc"
            ) {
              echo "<li class='lilista' id='$carpeta'><a class ='alista'href='$ruta_completa'><span class='spanlista'>$carpeta</span></a></li>";
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
    </main>
    <footer>
      <h3>Para saber como es la indexzacion de los directorios, mira el codigo en <a href="DAW/config/">config</a></h3>
    </footer>
    <aside class="social">
      <a href="https://github.com/JoseManuelLopezValer0"><img src="../../img/git.png"></a>
      <a href="https://www.instagram.com/jmlg_a3d/"><img src="../../img/int.png"></a>
      <a href="https://twitter.com/L0p3zVal3r012"><img src="../../img/twt.png"></a>
    </aside>
  </div>
</body>

</html>