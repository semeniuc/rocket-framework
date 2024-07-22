<?php

define('APP_PATH', dirname(__DIR__));
require_once APP_PATH . '/vendor/autoload.php';

use App\Kernel\App;
use App\Kernel\Http\Response;

try {
    $app = new App();
    $app->run();
} catch (\Exception $e) {
    $response = new Response();
    $response->send(
        content: json_encode([
            'file' => $e->getFile(),
            'line' => $e->getLine(),
            'error' => $e->getMessage(),
        ]),
        status: $e->getCode(),
        headers: ['Content-Type' => 'application/json'],
    );
}
