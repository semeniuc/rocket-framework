<?php

declare(strict_types=1);

namespace App;

class App
{
    public function run() {
        $routes = require_once APP_PATH . '/config/routes.php';
        $uri = $_SERVER['REQUEST_URI'] ?? null;

        $routes[$uri]();

    }
}