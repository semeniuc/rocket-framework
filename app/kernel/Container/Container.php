<?php

declare(strict_types=1);

namespace App\Kernel\Container;

use App\Kernel\Http\Request;
use App\Kernel\Router\Router;

readonly class Container
{
    public Request $request;
    public Router $router;


    public function __construct(Request $request, Router $router)
    {
        $this->request = $request;
        $this->router = $router;
    }

    public static function registerServices(): static
    {
        return new static(
            Request::createFromGlobals(),
            new Router()
        );
    }
}