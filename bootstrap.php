<?php

$config = require 'config.php';

require 'DBConnection.php';
require 'DBQuery.php';

$pdo = Connection::make($config['database']);
