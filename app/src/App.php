<?php

declare(strict_types=1);

namespace App;

use App\Router\Router;

class App
{
    public function run(): void
    {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        $router = new Router();
        $router->dispath($uri, $method);
    }
}