<?php

use Core\Foundation\Router\Router;

Router::get('/','HomeController#getIndex');

// $router->respond('GET', '/?', function ($request) {
//     return action('HomeController#getIndex', $request);
// });
//
// $router->with('/panel',function() use ($router){
//     $router->respond('GET', '/?', function ($request) {
//         return "panel";
//     });
//     $router->respond('GET', '/user/?', function ($request) {
//         return "user";
//     });
// });
