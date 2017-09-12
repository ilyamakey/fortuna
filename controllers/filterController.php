<?php

// echo var_dump($_POST);

require '../bootstrap.php';

$query = new DBQuery($pdo);

$info = $query->fetchFiltered('machines', $_POST);

var_dump($info);
