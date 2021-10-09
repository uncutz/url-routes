<?php declare(strict_types=1);

namespace Backend;

class Routes
{
    /** @var array<string,string> */
    private $routes = [];

    /**
     * @param array $routes
     * @return self
     */
    public function append(array $routes):self
    {
        $this->routes = array_replace_recursive($this->routes, $routes);
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }



}