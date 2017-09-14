<?php

namespace Controllers;

Class MachineController
{
    private $query;

    public function __construct()
    {
        $this->query = new \DBQuery(\Connection::make(getenv('DB_HOST')));
    }

    public function index()
    {
    }

    public function machines()
    {
        $info = $this->query->fetchAll('machines', 2);
        var_dump($info);
        echo PHP_EOL.'<br/><br/>';
        return 'done downloading machines';
    }
}