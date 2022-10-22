<?php

/**
 * @author  Jose Manuel López Valero
 * 
 * Documentacion:
 * 
 */

$aFestivos = array(
    "nacionales" => array(
        array("mes" => 1, "dia"  => 1),
        array("mes" => 1, "dia"  => 6),
        array("mes" => 4, "dia"  => 9),
        array("mes" => 4, "dia"  => 10),
        array("mes" => 5, "dia"  => 1),
        array("mes" => 8, "dia"  => 15),
        array("mes" => 10, "dia"  => 12),
        array("mes" => 11, "dia"  => 1),
        array("mes" => 12, "dia"  => 6),
        array("mes" => 12, "dia"  => 8),
        array("mes" => 12, "dia"  => 25)
    ),
    "locales" => array(
        array("mes" => 10, "dia"  => 24)
    ),
    "personales" => array(
        array("mes" => 6, "dia"  => 23)
    )
);
foreach ($aFestivos as $i => $value1) {
    foreach ($aFestivos[$i] as $j => $value2) {
        echo $i;
        echo " : ";
        foreach ($aFestivos[$i][$j] as $k => $value3) {
            echo $k;
            echo ": ";
            echo $value3;
            echo " ";
        }
        echo "<p>";
    }
    echo "<br>";
};
