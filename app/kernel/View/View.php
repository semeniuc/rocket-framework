<?php

declare(strict_types=1);

namespace App\Kernel\View;

class View
{
    public function page(string $name, array $data = []): void
    {
        $path = APP_PATH . '/views/pages/' . $name . '.php';
        include_once $path;
    }
}