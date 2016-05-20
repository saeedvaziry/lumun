<?php

include_once __DIR__.'/../core/bootstrap/autoload.php';
include_once __DIR__.'/../core/helpers.php';

spl_autoload_register(function ($class_name) {
    include __DIR__.'/../'.$class_name . '.php';
});

$router = new \Klein\Klein();
include_once __DIR__.'/../app/routes.php';
$router->dispatch();
