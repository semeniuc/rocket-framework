<?php

declare(strict_types=1);

namespace App\Kernel\View;

use App\Kernel\Exceptions\ViewNotFoundException;

class View
{
    /**
     * @throws ViewNotFoundException
     */
    public function page(string $name, array $data = []): void
    {
        $path = APP_PATH . "/views/pages/$name.php";

        if (!file_exists($path)) {
            throw new ViewNotFoundException(message: "View $name not found");
        }

        extract(['view' => $this]);
        include_once $path;
    }

    /**
     * @throws ViewNotFoundException
     */
    public function component(string $name, array $data = []): void
    {
        $path = APP_PATH . "/views/components/$name.php";
        if (!file_exists($path)) {
            throw new ViewNotFoundException(message: "Component $name not found");
        }
        extract($data);
        include_once $path;
    }
}