<?php

namespace Controllers;

Class AboutController
{

    public function index()
    {

      $message = 'this is About page';

      require './views/about.view.php';

    }


}
