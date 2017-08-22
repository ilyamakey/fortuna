<?php

class Connection
{

    public static function make()
    {
        try {

            $pdo = new PDO (
                'mysql:host=' . getenv('DB_HOST') . ';dbname=' . getenv('DB_NAME'),
                getenv('DB_USER'),
                getenv('DB_PASSWORD'),
                [

                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

                ]
            );

        } catch (PDOException $e) {

            die($e->getMEssage());

        };

        return $pdo;

    }


}
