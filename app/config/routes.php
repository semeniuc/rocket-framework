<?php

use App\Kernel\Router\Route;

return [
    Route::get('/', [\App\Controller\HomeController::class, 'index']),
    Route::get('/movies', [\App\Controller\MovieController::class, 'index']),
    Route::get('/admin/movies/add', [\App\Controller\Admin\Movies\AddController::class, 'index']),
    Route::get('/test', function () {
        echo 'Test page';
    }),
];