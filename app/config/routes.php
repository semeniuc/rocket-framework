<?php

use App\Controller\ContactController;
use App\Controller\HomeController;
use App\Router\Route;

return [
    Route::get('/', [HomeController::class, 'index']),
    Route::get('/contact', [ContactController::class, 'index']),
    Route::get('/mail', function () {
        echo 'You want to send mail?';
    }),
];