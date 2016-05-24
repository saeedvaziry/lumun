<?php

include_once __DIR__.'/../core/bootstrap/autoload.php';
include_once __DIR__.'/../core/helpers.php';

spl_autoload_register(function ($class_name) {
    include __DIR__.'/../'.$class_name.'.php';
});

include_once __DIR__.'/../app/routes.php';

return abort(404);
