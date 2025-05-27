<?php

namespace Router;

class Router
{
    private array $route = [];
    public function addRoute($method, $url, $controller, $action):void {
        $this->route[$method][$url] = [
            'controller' => $controller,
            'action' => $action
        ];
    }
    public function matchRoute($url, $method):array {
        $values = [];
        if(array_key_exists($url, $this->route[$method])) {
            $values['controller'] = $this->route[$method][$url]['controller'];
            $values['action'] = $this->route[$method][$url]['action'];
        }
        return $values;
    }
}