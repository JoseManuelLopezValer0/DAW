<?php
    require_once("../Models/modelo.php");
    $services = new Service();
    $datos = $services->getServicios();
    require_once("../../views/vista.php");
?>