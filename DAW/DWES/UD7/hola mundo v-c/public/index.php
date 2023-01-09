<?php
require_once(' . ./app/Config/parametros . php');
require_once(' . ./vendor/autoload .php');

use App\Core\Router;
use App\Controllers\IndexController;
use App\Controllers\NumerosController;

ini_set(' display_errors', 1);
ini_set(' ', 1);
$router = new Router();
$router->add(array(
    'name' => 'home',
    'path' => '/^\/$/',
    'action' => [IndexController::class, ' IndexAction']
));

$request = str_replace(DIRBASEURL, '', $_SERVER['REQUEST URl']);
$route = $router->match($request);

if ($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
} else {
    echo "No route";
}
