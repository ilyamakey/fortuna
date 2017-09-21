<?php

namespace Controllers;
use View;

Class HomePageController
{

    public function index()
    {

      $view = new View('/home');

      return $view->renderView();

    }


}
