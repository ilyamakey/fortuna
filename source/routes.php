<?php

return [

'machine-page' =>[
  							'path'=>'/machines',
  							'controller'=>'\Controllers\MachineController',//<==namespace
              	'action' => 'machines'
							],
'about-page' => [
  							'path' => '/about',
    						'controller'=>'\Controllers\AboutController',
    						'action' => 'index'
  						],
'home-page' => [
  							'path' => '/home',
    						'controller'=>'\Controllers\HomePageController',
    						'action' => 'index'
  						]

];
