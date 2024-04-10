<?php

declare(strict_types=1);

namespace App;

use App\Http\Request;
use App\Router\Router;

class App
{
    public function run(): void
    {
        $request = Request::createFromGlobals();

//        dd($request);

        $router = new Router();
        $router->dispath($request->uri(), $request->method());
    }
}