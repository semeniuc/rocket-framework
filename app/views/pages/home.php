<?php

use App\Kernel\View\View;

/** @var View $view */
$view->component('header', ['title' => "Home"]);
?>

    <h3>Home page</h3>

<?php
$view->component('footer'); ?>