<?php

define('BASE_DIR', __DIR__);
define('VIEWS_DIR', BASE_DIR . '/views');
require 'bootstrap.php';
require BASE_DIR . '/controllers/MachineController.php';
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case '/' :
        require VIEWS_DIR . '/home.view.php';
        break;
    case '/machines':
        $controller = new \Controllers\MachineController();
        echo $controller->machines();
        break;
    default :
        echo 'fuck you';
        break;
}
