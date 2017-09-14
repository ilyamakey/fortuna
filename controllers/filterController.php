<?php

require '../bootstrap.php';

$query = new DBQuery($pdo);

$filteredItems = $query->fetchFiltered('machines', $_POST);

var_dump($filteredItems);
