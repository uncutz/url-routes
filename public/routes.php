<?php

use Backend\Controller\IndexController;

require __DIR__ .'/../vendor/autoload.php';
return [

    'Index' => [
        'type' => 'GET',
        'path' => '/',
        'method' => IndexController::class . ':index'
    ]
];