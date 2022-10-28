<?php

/**
 * Docuemntacion:
 * 
 * Archivo de funciones del archivo php.
 * 
 * @author Jose Manuel Lopez Valero
 * @version 1.0
 * 
 * logout.php
 */
session_start();
session_destroy();
header("Location: login.php");

?>