<?php

// routes.php

$routes = [

    // HOME
    ''          => 'App\Controller\HomeController@index',

    // USER SESSION
    'login'     => 'App\Controller\AuthController@login',
    'gateway'   => 'App\Controller\AuthController@gateway',
    'logout'    => 'App\Controller\AuthController@logout',


 ];
