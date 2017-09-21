<?php

class View
{

  protected $baseName = '.view.php';

  public function __construct($viewName, $data)
  {

    $this->view = VIEWS_DIR . $viewName . $this->baseName;
    $this->data = $data;

  }

  public function renderView()
  {

    require $this->view;

  }

}
