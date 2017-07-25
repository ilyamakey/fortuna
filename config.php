<?php

return [

  'database' => [

      'host'=>'mysql:host=127.0.0.1',
      'name' => 'fortuna',
      'user' => 'root',
      'password' => 'pass',
      'options' => [

        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

      ]

  ]

]

?>
