<?php

namespace Controllers;
use View;

Class MachineController
{
    private $query;

    public function __construct()
    {

        $this->query = new \DBQuery(\Connection::make(getenv('DB_HOST')));

    }

    public function machines()
    {
        $info = $this->query->fetchAll('machines', 2);

        $view = new View('/machines', $info);

        return $view->renderView();

    }
}
