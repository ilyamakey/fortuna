<?php

class DBQuery
{

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAll($table, $limit = 10)
    {
        $data = $this->pdo->prepare('select * from ' . $table . " limit ". $limit);
        $data->execute();

        return $data->fetchAll(PDO::FETCH_OBJ);
    }


}
