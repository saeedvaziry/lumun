<?php

$router->respond('GET', '/[:name]', function ($request) {
    return action('HomeController#getIndex', $request);
});

// $router->respond('GET', '/', action('HomeController#getIndex'));
