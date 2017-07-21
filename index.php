<?php

require 'bootstrap.php';

$query = new DBQuery($pdo);

$info = $query->fetchAll('machines');

// var_dump($info);

foreach ($info as $key) {
  echo $key['model'];
}
