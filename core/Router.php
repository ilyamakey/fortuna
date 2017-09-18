<?php

class Router
{

  public function __construct($routes)
  {

    $this->routes = $routes;

  }


  public function redirect($uri, $defaultView)
  {

    foreach ($this->routes as $name => $options) {

      if ($options['path'] === $uri) {

        $controller = new $options['controller'];
        $action = $options['action'];

        return $controller->$action();

      } else if ($uri === '/') {

        return $defaultView;

      }

    }

  }

}
