<?php
namespace Router;

class Router {
    private $routes = [];

    public function addRoute($method, $path, $controller, $action) {
        $this->routes[$method][$path] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function matchRoute($url, $method) {
        foreach ($this->routes[$method] as $routePath => $route) {
            // Sostituisci i parametri dinamici con regex
            $pattern = preg_replace('#\{[a-z]+\}#', '([^/]+)', $routePath);
            $pattern = "#^$pattern$#";

            if (preg_match($pattern, $url, $matches)) {
                array_shift($matches);
                return [
                    'controller' => $route['controller'],
                    'action' => $route['action'],
                    'params' => $matches
                ];
            }
        }
        return null;
    }
}