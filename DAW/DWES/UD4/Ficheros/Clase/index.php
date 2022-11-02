<?php
/**
 * Documentacion:
 * 
 * @author Jose Manuel
 * @version 1.0.0
 */
$file = fopen("data/poema.txt","r");
$file1 = fopen("data/poemaMayuscula.txt","w");

// Lectura
while (!feof($file)) {
    $linea = fgets($file). "<br/>";
    echo $linea;
}
fclose($file);

// //Escritura
// while (!feof($file)) {
//     $linea = fgets($file);
//     $text = strtoupper($linea);
//     fwrite($file1,$text);
// }
// fclose($file);
// fclose($file1);

// Lectura
$file1 = fopen("data/poemaMayuscula.txt","r");
while (!feof($file1)) {
    $linea = fgets($file1). "<br/>";
    echo $linea;
}
fclose($file1);