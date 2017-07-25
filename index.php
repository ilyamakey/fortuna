<?php

require 'bootstrap.php';

$query = new DBQuery($pdo);

$info = $query->fetchAll('machines');

require 'views/index.view.php';
