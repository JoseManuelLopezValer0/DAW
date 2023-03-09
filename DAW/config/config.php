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
                && $carpeta != ".git"
                && $carpeta != ".github"
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
                && $carpeta != "app"
                && $carpeta != "App"
                && $carpeta != "views"
                && $carpeta != "include"
                && $carpeta != "vendor"
                && $carpeta != "my-app"
                && $carpeta != "dist"
                && $carpeta != "src"
                && $carpeta != "node_modules"
                && $carpeta != "public"
                && $carpeta != "scripts"
                && $carpeta != "script"
                && $carpeta != "modules"
                && $carpeta != ".vite"
                && $carpeta != "imagenes"
                && $carpeta != "capturas"
                && $carpeta != "video"
                && $carpeta != "webfonts"
                && $carpeta != "iconos"
                && $carpeta != ".vscode"
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
