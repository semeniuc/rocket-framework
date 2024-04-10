<?php

declare(strict_types=1);

namespace App\Controller;

use App\Kernel\View\View;

class ContactController
{
    public function index()
    {
        $view = new View();
        $view->page('contact');
    }
}