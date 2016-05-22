<?php

// function action($command, $request = '')
// {
//     $command = explode('#', $command);
//     $controller = 'App\\Controllers\\'.$command[0];
//     $function = $command[1];
//
//     $params = get_function_methods($controller, $function);
//     $arguments = array();
//     foreach ($params as $param) {
//         $id = $param->name;
//         if($id == 'request')
//             array_push($arguments, $request);
//         else
//             array_push($arguments, $request->$id);
//     }
//
//     $object = new $controller();
//
//     return call_user_func_array(array($object, $function), $arguments);
// }

function redirect($url, $data = '')
{
    if (substr($url, 0, 7) === 'http://') {
        header('location:'.$url);
    } else {
        header('location:/'.$url);
    }
}

function abort($code)
{
    return view('errors/'.$code);
}

function get_function_methods($className, $methodName)
{
    $r = new ReflectionMethod($className, $methodName);
    $params = $r->getParameters();

    return $params;
}

function view($view, $data = array())
{
    // twig template engine
    $loader = new Twig_Loader_Filesystem(__DIR__.'/../app/views');
    $template = new Twig_Environment($loader);
    $template = new Twig_Environment($loader, array(
        'cache' => __DIR__.'/../storage/cache/views',
    ));

    echo $template->render($view.'.php', $data);
    
    // mustache template engine
    // Mustache_Autoloader::register();
    // $template = new Mustache_Engine(array(
    //     'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/../app/views', array('extension' => '.php')),
    // ));
    // return $template->render($view, $data);

    // manual template engine
    // ob_start();
    // include __DIR__.'/../app/views/'.$view.'.php';
    // $var = ob_get_contents();
    // ob_end_clean();
    //
    // return $var;
}

function print_r_d($data)
{
    echo '<pre>';
    print_r($data);
    die();
}
