<?php

class DBQuery
{

  public function __construct(PDO $pdo)
  {

    $this->pdo = $pdo;

  }

  public function fetchAll($table)
  {

    $data = $this->pdo->prepare('select * from ' . $table);
    $data->execute();
    return $data->fetchAll();

  }



}
