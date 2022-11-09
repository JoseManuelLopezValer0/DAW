<?php

/**
 * 
 * Documentación:
 * 
 * @autor: Jose Manuel
 * @version: 1.0
 */

// require_once 'app/models/Perro.php';
// require_once 'app/models/Persona.php';

require_once 'vendor/autoload.php';

use App\Models\Perro;
use App\Models\Persona;

$perro = new Perro("tana", "Negro");
echo "Dame la pata: ";
$perro->darPata();
$perro->entrenar();
$perro->entrenar();
$perro->entrenar();
$perro->entrenar();
$perro->entrenar();
$perro->entrenar();
$perro->darPata();

?>