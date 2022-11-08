<?php
function obtener_estructura_directorios($ruta)
{
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)) {
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        echo "<ul>";

        // Recorre todos los elementos del directorio
        while (($carpeta = readdir($gestor)) !== false) {

            $ruta_completa = $ruta . "/" . $carpeta;

            // Se muestran todas las carpetas excepto ".", "..",".git","config", "css","lib","icon","js","img","fonts","assets", "data", "doc, "app" y "vendor" 
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
                && $carpeta != "app"
                && $carpeta != "vendor"
            ) {
                echo "<li class='lilista'><a class ='alista'href='$ruta_completa'><span class='spanlista'>$carpeta</span></a></li>";
                obtener_estructura_directorios($ruta_completa);
            }
        }

        // Cierra el gestor de directorios
        closedir($gestor);
        echo "</ul>";
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
}
