<?php declare(strict_types=1);

$index = function () {
    echo 'Index';
};

$user = function ($args = null) {
    echo 'user' . $args;
};

$http404 = function () {
    echo '404';
};

router('/', $http404, $index);

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

/**
 * @param $path string
 * @param Closure $http404
 * @param Closure|null $action
 * @param string|null $methods
 * @return mixed
 */
function router (string $path, Closure $http404, ?Closure $action = null, ?string $methods = 'POST|GET'): mixed
{
    static $routes = [];
    if ($action) {
        return $routes['('.$methods.')_'.$path] = $action;
    }

    foreach ($routes as $route => $action) {
        $regEx = "~^$route/?$~i";
        $matches = [];

        if (!preg_match($regEx, $path, $matches)) {
            continue;
        }
        if(!is_callable($action)) {
            return call_user_func_array($http404,$matches);
        }
        array_shift($matches);
        array_shift($matches);
        return call_user_func_array($action, $matches);
    }

    return call_user_func_array($http404, [$path]);

}

/** @var $_SERVER $requestUrl */
$requestUrl = $_SERVER['REQUEST_METHOD'].'_'.$_SERVER['REQUEST_URI'];

router($requestUrl, $http404);