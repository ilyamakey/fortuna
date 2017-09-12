<?php

class DBQuery
{

    public function __construct(PDO $pdo)
    {

        $this->pdo = $pdo;

    }

    public function fetchAll($table)
    {

        $data = $this->pdo->prepare('SELECT * FROM ' . $table);
        $data->execute();

        return $data->fetchAll(PDO::FETCH_OBJ);

    }

    public function fetchFiltered($table, $parameter)
    {
      if(!$parameter) header("Location: /");

      foreach ($parameter as $key => $value) {

        if ($value === "checked") {

          $checkbox = $checkbox . $key . " IS NOT NULL AND ";

        } else {

          $radio = $radio . "$key = '$value'" . " AND ";

        }

      };

      $checkbox = rtrim($checkbox, "AND ");
      $radio = rtrim($radio, "AND ");

      if(!$checkbox) {

        $statement = $radio;

      } else if (!$radio){

        $statement = $checkbox;

      } else $statement = $checkbox . " AND " . $radio;

      $data = $this->pdo->prepare("SELECT * FROM $table WHERE $statement");

      $data->execute();

      return $data->fetchAll(PDO::FETCH_OBJ);

    }

}
