<?php

use App\Kernel\Router\Route;

return [
    Route::get('/', [\App\Controller\HomeController::class, 'index']),
    Route::get('/movies', [\App\Controller\MovieController::class, 'index']),
//    Route::get('/admin/movies/add', [\App\Controller\MovieController::class, 'add']),
    Route::get('/admin/movies/add', [\App\Controller\MovieController::class, 'store']),
    Route::get('/test', function () {
        echo 'Test page';
    }),
];