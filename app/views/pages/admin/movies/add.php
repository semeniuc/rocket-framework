<?php

/** @var App\Kernel\View\View $view */

$view->component('header', ['title' => "Add film"]);
?>

<h3>Add film</h3>

<form action="/admin/movies/add" method="post">
    <p>Title</p>
    <div>
        <input type="text" name="name">
    </div>
    <div>
        <button>Add</button>
    </div>
</form>

<?php
$view->component('footer'); ?>
