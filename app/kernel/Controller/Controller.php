<?php

declare(strict_types=1);

namespace App\Kernel\Controller;

use App\Kernel\View\View;

abstract class Controller
{
    private View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function view(string $name, array $data = []): void
    {
        $this->view->page($name, $data);
    }
}