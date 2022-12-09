<?php
require_once('../vendor/autoload.php');
use Dotenv\Dotenv;
use App\Models\Equipos;

session_start();
ini_set('display_errors',1);
ini_set('display_starup_error',1);
error_reporting(E_ALL);

$dotenv = Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();
define('DBHOST', $_ENV['DB_HOST']);
define('DBUSER', $_ENV['DB_USER']);
define('DBPASS', $_ENV['DB_PASS']);
define('DBNAME', $_ENV['DB_NAME']);
define('DBPORT', $_ENV['DB_PORT']);


$equipo = new Equipos();
$equipo->setNombre('Barcelona');
