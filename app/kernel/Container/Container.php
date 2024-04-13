<?php

declare(strict_types=1);

namespace App\Kernel\Container;

use App\Kernel\Http\Request;
use App\Kernel\Router\Router;

readonly class Container
{
    public function __construct(
        public Request $request,
        public Router $router
    ) {
    }

    public static function registerServices(): static
    {
        return new static(
            Request::createFromGlobals(),
            new Router()
        );
    }
}