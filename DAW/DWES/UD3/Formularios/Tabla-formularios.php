<?php
/**
 * Documentacion:
 * 
 * Creamos un bucle para mostrar las tablas de multiplicar
 *  @author:lopezValero
 */
echo("<table border=´1´>");
echo("<tbody>");
$n=10;
for ($i=1; $i <= $n ; $i++) { 
    echo("<tr>");
    echo("<td>  $i");
    for ($c=1; $c <= $n ; $c++) {
    echo("<td>");
    echo($i*$c);
    echo("</td>");
    }
    echo("</td>");
    echo("</tr>");
 }

 echo("</tbody>");
 echo("</table>");
 echo("<br/>");
 $url ="https://github.com/JoseManuelLopezValer0/DAW/blob/main/DAW/DWES/UD3/Formularios/Tabla-formularios.php";
echo("<a href=$url target=´_blank´> https://github.com/JoseManuelLopezValer0/DAW/blob/main/DAW/DWES/UD3/Formularios/Tabla-formularios.php</a>");
