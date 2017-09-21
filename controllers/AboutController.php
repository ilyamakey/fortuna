<?php

namespace Controllers;
use View;

Class AboutController
{

    public function index()
    {

      $view = new View('/about');

      return $view->renderView();

    }


}
