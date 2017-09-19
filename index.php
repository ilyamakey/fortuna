<?php

define('BASE_DIR', __DIR__);
define('VIEWS_DIR', BASE_DIR . '/views');

require 'bootstrap.php';

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

$routes = require './source/routes.php';

$router = new Router($routes);
$defaultView = VIEWS_DIR . '/home.view.php';

require $router->redirect($request_uri[0], $defaultView);


//
// switch ($request_uri[0]) {
//     case '/' :
//         require VIEWS_DIR . '/home.view.php';
//         break;
//     case '/machines':
//         $controller = new \Controllers\MachineController();
//         echo $controller->machines();
//         break;
//     default :
//         echo 'fuck you';
//         break;
// }
