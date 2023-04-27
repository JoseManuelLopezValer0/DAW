<?php

$capitales = array(
    "España" => "Madrid",
    "Francia" => "París",
    "Italia" => "Roma",
    "Portugal" => "Lisboa",
    "Alemania" => "Berlín",
    "Holanda" => "Ámsterdam",
    "Suiza" => "Berna",
    "Grecia" => "Atenas",
    "Rusia" => "Moscú",
    "China" => "Pekín",
    "Japón" => "Tokio",
    "Australia" => "Canberra",
    "Sudáfrica" => "Pretoria",
    "Marruecos" => "Rabat",
    "Túnez" => "Túnez",
    "Argelia" => "Argel",
    "Sudán" => "Jartum",
    "Nigeria" => "Abuya",
    "Eritrea" => "Asmara"
);
if (isset($_POST["enviar"])) {

    $aciertos = 0;
    $fallos = 0;
    foreach ($capitales as $pais => $capital) {
        if (isset($_POST[$pais])) {
            if ($_POST[$pais] == $capital) {
                $aciertos++;
            } else {
                $fallos++;
            }
        }
    }
    echo "Aciertos: $aciertos<br>";
    echo "Fallos: $fallos<br>";
    echo "<br>";
    echo "<table border='1'>";
    foreach ($capitales as $pais => $capital) {
        echo "<tr>
            <td>$pais</td>";
            if (isset($_POST[$pais])) {
                if ($_POST[$pais] == $capital) {
                    $Color = "style='color: green;'";
                    $icon = "✔️";
                } else {
                    $Color = "style='color: red;'";
                    $icon = "❌";
                }
            } else {
                $Color = "";
            }
        echo "<td $Color >$capital $icon</td>
        </tr>";
    }
    echo "</table>";
    echo "<br>";
    echo "<a href='index.php'>Volver</a>";
    echo "<br>";
} else {
    echo "<form action='index.php' method='post'>";
    echo "<table border='1'>";
    foreach ($capitales as $pais => $capital) {
        echo "<tr>
            <td>$pais</td>
            <td><input type='text' name='$pais'></td>
        </tr>";
    }
    echo "</table>";
    echo "<br>";
    echo "<input type='submit' name='enviar' value='Enviar'>";
    echo "</form>";
}

echo "<br>";
