<?php

declare(strict_types=1);

namespace App;

class Router
{
    private $routes = [];

    public function addRoute($method, $uri, $controllerAction): void
    {
        $this->routes[] = compact('method', 'uri', 'controllerAction');
    }

    public function match(string $uri): ?string
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri) {
                return $route['controllerAction'];
            }
        }

        return NULL;
    }
}
