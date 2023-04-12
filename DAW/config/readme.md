# Configuración y Funcion

En esta sección se explica la estructura de ficheros y el código de la aplicación de config.php

El siguiente código muestra la estructura del fichero de configuración en el cual se encuentra la función de exploración de las carpetas y el listado de estas.

config.php

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

                /** Se muestran todas las carpetas excepto ".", "..", "js", "css", "lib", "img", "doc", "app", "App", 
            * "src", ".git", "icon", "data", "dist", "views", "video", "fonts", ".vite", "config", "assets", "my-app",
            * "vendor", "public", "iconos", "script", ".github", "include", "scripts", ".vscode", "modules", "webfonts",
            * "imagenes", "capturas", "node_modules" ;
            **/
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
                    echo "<li class='lilista'>
                        <a class ='alista'href='$ruta_completa'>
                            <span class='spanlista'>$carpeta</span>
                        </a>
                    </li>";
                    obtener_estructura_directorios($ruta_completa);
                }
            }

            // Cierra el gestor de directorios
            closedir($gestor);
            echo "</ul>";
        } else {
            echo "No es una ruta de directorio valida";
        }
    }

# Ejecucion de la funcion

El siguiente código muestra como se ejecuta la función de exploración de las carpetas y el listado de estas.

Mostrar carpetas

    //incluimos el fichero de funciones
    include "/..Ruta al config.php../config.php";
    // llama a la funcion y le damos la ruta . que es la actual
    obtener_estructura_directorios(".");
