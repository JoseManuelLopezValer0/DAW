<?php
$aAlumnos = array(
    array("nombre"=>"jose","foto"=>"imagen.png"),
    array("nombre"=>"paco","foto"=>"imagen.png"),
    array("nombre"=>"luis","foto"=>"imagen.png"),
    array("nombre"=>"pepe","foto"=>"imagen.png")
);
$n = random_int(0,sizeof($aAlumnos)-1);
echo $aAlumnos[$n]["nombre"];
echo "</br>";
echo $aAlumnos[$n]["foto"];
