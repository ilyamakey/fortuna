<?php
error_reporting('E_ALL');
require_once 'vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

require_once './core/DBConnection.php';
require_once './core/DBQuery.php';

$pdo = Connection::make(getenv('DB_HOST'));
