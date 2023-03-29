<?php

// A partir de un array que almacena comunidades autónomas y provincias, escribe un programa que muestre aleatoriamente una comunidad autónoma y presente un formulario con un checkbox que permita seleccionar las provincias que pertenecen a la comunidad. 
// En respuesta al formulario, la aplicación mostrará número de aciertos y fallos. Incluye una opción que permita visualizar las opciones correctas.

$comunidades = array(
    "Andalucía" => array("Almería", "Cádiz", "Córdoba", "Granada", "Huelva", "Jaén", "Málaga", "Sevilla"),
    "Aragón" => array("Huesca", "Teruel", "Zaragoza"),
    "Asturias" => array("Asturias"),
    "Baleares" => array("Baleares"),
    "Canarias" => array("Las Palmas", "Santa Cruz de Tenerife"),
    "Cantabria" => array("Cantabria"),
    "Castilla y León" => array("Ávila", "Burgos", "León", "Palencia", "Salamanca", "Segovia", "Soria", "Valladolid", "Zamora"),
    "Castilla-La Mancha" => array("Albacete", "Ciudad Real", "Cuenca", "Guadalajara", "Toledo"),
    "Cataluña" => array("Barcelona", "Gerona", "Lérida", "Tarragona"),
    "Ceuta" => array("Ceuta"),
    "Comunidad Valenciana" => array("Alicante", "Castellón", "Valencia"),
    "Extremadura" => array("Badajoz", "Cáceres"),
    "Galicia" => array("La Coruña", "Lugo", "Orense", "Pontevedra"),
    "Madrid" => array("Madrid"),
    "Melilla" => array("Melilla"),
    "Murcia" => array("Murcia"),
    "Navarra" => array("Navarra"),
    "País Vasco" => array("Álava", "Guipúzcoa", "Vizcaya"),
    "La Rioja" => array("La Rioja")
);

if (isset($_POST["enviar"])) {
    $aciertos = 0;
    $fallos = 0;
    foreach ($comunidades as $comunidad => $provincias) {
        if (isset($_POST[$provincias])) {
            $aciertos++;
        } else {
            $fallos++;
        }
    }
    echo "Aciertos: $aciertos<br>";
    echo "Fallos: $fallos<br>";
    echo "<br>";
    echo "<table border='1'>";
    foreach ($comunidades as $comunidad => $provincias) {
        echo "<tr>
            <td>$comunidad</td>";
            if (isset($_POST[$comunidad])) {
                $Color = "style='color: green;'";
                $icon = "✔️";
            } else {
                $Color = "style='color: red;'";
                $icon = "❌";
            }
        echo "<td $Color >$icon</td>
        </tr>";
    }
    echo "</table>";
    echo "<br>";
    echo "<a href='index.php'>Volver</a>";
} else {
    $comunidad = array_rand($comunidades);
    echo "<form action='index.php' method='post'>";
    echo "<h1>$comunidad</h1>";
    foreach ($comunidades[$comunidad] as $provincia) {
        echo "<input type='checkbox' name='$comunidad' value='$provincia'>$provincia<br>";
    }
    echo "<input type='submit' name='enviar' value='Enviar'>";
    echo "</form>";
}