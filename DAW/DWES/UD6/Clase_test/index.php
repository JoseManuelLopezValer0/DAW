<?php

include ('config/config.php');
include ('lib/functions.php');


echo 'insertar un equipo <BR>';

$db = conectaDB();
$consulta = "INSERT INTO equipos (equipo) VALUES ('Equipo 2')";
$result = $db->query($consulta);
if (!$result) {
    print "Error en la consulta.";
} else {
    print "Equipo insertado correctamente. <BR>";
}

echo '<BR>';
echo 'Mostar los equipos <BR>';

$consulta = "SELECT * FROM equipos";
$result = $db->query($consulta);
if (!$result) {
    print "Error en la consulta.";
} else {
    foreach ($result as $valor) {
        print $valor['equipo'] . "<BR>";
    }
}

echo '<BR>';
echo 'Eliminar un equipo <BR>';

$consulta = "DELETE FROM equipos WHERE equipo = 'Equipo 2'";
$result = $db->query($consulta);
if (!$result) {
    print "Error en la consulta.";
} else {
    print "Equipo eliminado correctamente. <BR>";
}

echo '<BR>';
echo 'Mostar los equipos <BR>';

$consulta = "SELECT * FROM equipos";
$result = $db->query($consulta);
if (!$result) {
    print "Error en la consulta.";
} else {
    foreach ($result as $valor) {
        print $valor['equipo'] . "<BR>";
    }
}
