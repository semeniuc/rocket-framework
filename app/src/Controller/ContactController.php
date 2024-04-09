<?php

declare(strict_types=1);

namespace App\Controller;

class ContactController
{
    public function index() {
        require_once APP_PATH . '/views/pages/contact.php';
    }
}