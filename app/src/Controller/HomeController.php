<?php

declare(strict_types=1);

namespace App\Controller;

class HomeController
{
    public function index() {
        require_once APP_PATH . '/views/pages/home.php';
    }
}