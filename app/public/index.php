<?php

require_once "../vendor/autoload.php";

$routes = include_once "../framework/config/routes.php";
$uri = $_SERVER['REQUEST_URI'] ?? null;



//if($uri !== null && !empty($routes[$uri])) {
////    $routes[$uri];
//    echo 'Hi';
//} else {
//    dd($uri);
//}

echo $uri;
//echo true;
//phpinfo();