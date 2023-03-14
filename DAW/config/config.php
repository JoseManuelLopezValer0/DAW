<?php
function obtener_estructura_directorios($ruta)
{
  // echo "Directorio: $ruta <BR>";
  if (is_dir($ruta)) {
    $gestor = opendir($ruta);
    echo "<ul>";

    while (($carpeta = readdir($gestor)) !== false) {

      $ruta_completa = $ruta . "/" . $carpeta;

      if (
        is_dir($ruta_completa)
        && $carpeta != "."
        && $carpeta != ".."
        && $carpeta != "js"
        && $carpeta != "css"
        && $carpeta != "lib"
        && $carpeta != "img"
        && $carpeta != "doc"
        && $carpeta != "app"
        && $carpeta != "App"
        && $carpeta != "src"
        && $carpeta != ".git"
        && $carpeta != "icon"
        && $carpeta != "data"
        && $carpeta != "dist"
        && $carpeta != "views"
        && $carpeta != "video"
        && $carpeta != "fonts"
        && $carpeta != ".vite"
        && $carpeta != "config"
        && $carpeta != "assets"
        && $carpeta != "my-app"
        && $carpeta != "vendor"
        && $carpeta != "public"
        && $carpeta != "iconos"
        && $carpeta != "script"
        && $carpeta != ".github"
        && $carpeta != "include"
        && $carpeta != "scripts"
        && $carpeta != ".vscode"
        && $carpeta != "modules"
        && $carpeta != "webfonts"
        && $carpeta != "imagenes"
        && $carpeta != "capturas"
        && $carpeta != "node_modules"
      ) {
        echo "<li class='lilista'><a class ='alista'href='$ruta_completa'><span class='spanlista'>$carpeta</span></a></li>";
        obtener_estructura_directorios($ruta_completa);
      }
    }

    closedir($gestor);
    echo "</ul>";
  } else {
    echo "No es una ruta de directorio valida<br/>";
  }
}
