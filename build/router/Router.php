<?php
namespace Router;

class Router {
    protected $routes = [];

    public function __construct($routes) {
        $this->routes = $routes;
    }

    public function route($url) {
        if (array_key_exists($url, $this->routes)) {
            $parts = explode('@', $this->routes[$url]);
            $controllerName = $parts[0];
            $method = $parts[1];

            $controller = new $controllerName();
            $controller->$method();
        } else {
            echo "404 Not Found";
        }
    }
}
