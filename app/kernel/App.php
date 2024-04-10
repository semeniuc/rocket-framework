<?php

declare(strict_types=1);

namespace App\Kernel;

use App\Kernel\Http\Request;
use App\Kernel\Router\Router;

class App
{
    public function run(): void
    {
        $request = Request::createFromGlobals();

        $router = new Router();
        $router->dispath($request->uri(), $request->method());
    }
}