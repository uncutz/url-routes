<?php declare(strict_types=1);

use Backend\Routes;

include __DIR__.'/../vendor/autoload.php';

$index = function () {
    echo 'Index';
};

$user = function ($args = null) {
    echo 'user' . $args;
};

$http404 = function () {
    echo '404';
};


/*$routes = [];

$routes['(POST|GET)_/'] = $index;

$routes['(POST|GET)_/user/(\d+)'] = $user;

foreach ($routes as $route => $action) {
    $regEx = "~^$route/?$~i";
    $matches = [];
    if (!preg_match($regEx, $requestUrl)) {
        continue;
    }
    if (!is_callable($action)) {
        return $http404();
    }
    array_shift($matches);
    array_shift($matches);
    return call_user_func_array($action, $matches);
}

return $http404();*/


/** @var $_SERVER $requestUrl */
$requestUrl = $_SERVER['REQUEST_METHOD'].'_'.$_SERVER['REQUEST_URI'];

var_dump($requestUrl);

$router = new Routes();

$router->append(include __DIR__.'/routes.php');

$routes = $router->getRoutes();

var_dump($routes);






