<?php

declare(strict_types=1);

namespace App\Router;

class Router
{
    private array $routes = [
        'GET' => [],
        'POST' => [],
    ];
    
    public function __construct()
    {
        $this->initRoutes();
    }

    public function dispath(string $uri, string $method): void
    {
        $route = $this->findRoute($uri, $method);

        if ($route === null) {
            $this->notFound();
        }

        $route->getAction()();
    }

    private function findRoute(string $uri, string $method): ?Route
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->routes[$method][$uri];
        }

        return null;
    }

    private function notFound(): void
    {
        exit('404 | Not Found');
    }

    private function initRoutes(): void
    {
        $routes = $this->getRoutes();

        if (!empty($routes)) {
            foreach ($routes as $route) {
                $this->routes[$route->getMethod()][$route->getUri()] = $route;
            }
        }
    }

    /**
     * @return Route[]
     */
    private function getRoutes(): array
    {
        return require_once APP_PATH . '/config/routes.php';
    }
}