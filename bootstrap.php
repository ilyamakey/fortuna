<?php

$config = require 'config.php';

require 'core/DBConnection.php';
require 'core/DBQuery.php';

$pdo = Connection::make($config['database']);
