<?php

function action($command, $request = '')
{
    $command = explode('#', $command);
    $controller = 'App\\Controllers\\'.$command[0];
    $function = $command[1];

    $params = get_function_methods($controller, $function);
    $arguments = array();
    foreach ($params as $param) {
        $id = $param->name;
        array_push($arguments, $request->$id);
    }

    $object = new $controller();

    return call_user_func_array(array($object, $function), $arguments);
}

function get_function_methods($className, $methodName)
{
    $r = new ReflectionMethod($className, $methodName);
    $params = $r->getParameters();

    return $params;
}
