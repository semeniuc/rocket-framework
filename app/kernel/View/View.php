<?php

declare(strict_types=1);

namespace App\Kernel\View;

class View
{
    public function page(string $name, array $data = []): void
    {
        extract([
            'view' => $this
        ]);
        
        include_once APP_PATH . '/views/pages/' . $name . '.php';
    }

    public function component(string $name, array $data = []): void
    {
        extract($data);
        include_once APP_PATH . '/views/components/' . $name . '.php';
    }
}