<?php

use App\Router\Route;

return [
    Route::get('/', function () {
        echo 'This is main page';
    }),
    Route::get('/home', function () {
        include_once APP_PATH . '/views/pages/home.php';
    }),
];