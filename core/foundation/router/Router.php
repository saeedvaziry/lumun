<?php

namespace Core\Foundation\Router;

class Router
{
    public static function get($uri, $action = '')
    {
        $request = $_REQUEST;
        $requestUri = $_SERVER['REQUEST_URI'];
        if ($uri == $requestUri) {
            $action = explode('#', $action);
            $controller = 'App\\Controllers\\'.$action[0];
            $function = $action[1];
            $params = get_function_methods($controller, $function);
            $arguments = array();
            foreach ($params as $param) {
                $id = $param->name;
                if($id == 'request')
                    array_push($arguments, $request);
                else
                    array_push($arguments, $request->$id);
            }
            $object = new $controller();
            return call_user_func_array(array($object, $function), $arguments);
        }
    }
}
