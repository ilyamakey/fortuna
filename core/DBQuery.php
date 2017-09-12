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

      $checkbox = "";
      $radio = "";

      foreach ($parameter as $key => $value) {

        if ($value === "checked") {

          $checkbox = $checkbox . $key . " IS NOT NULL AND ";

        } else {

          $radio = "$key = '$value'";

        }

      };

      $checkbox = rtrim($checkbox, "AND ");

      if(!$checkbox) {

        $statement = $radio;

      } else if (!$radio){

        $statement = rtrim($checkbox, "AND ");

      } else $statement = rtrim($checkbox, "AND ") . " AND " . $radio;

      $data = $this->pdo->prepare("SELECT * FROM $table WHERE $statement");

      $data->execute();

      return $data->fetchAll(PDO::FETCH_OBJ);

    }

}
