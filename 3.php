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
    for ($c=1; $c <= $n ; $c++) {
    echo("<td>");
    echo($i*$c);
    echo("</td>");
    }
    echo("</tr>");
 }

 echo("</tbody>");
 echo("</table>");
 echo("<br/>");
 $url ="https://github.com/JoseManuelLopezValer0/DWES/blob/main/3.php";
echo("<a href=$url target=´_blank´> https://github.com/JoseManuelLopezValer0/DWES/blob/main/3.php</a>");
