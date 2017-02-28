<?php
/**
 * @param $path
 * @param closure|string|array $action
 * @return null
 */
function router($path, $action = null)
{
    static $routes = [];
    if (!$path) {
        $path = '/';
    }
    if ($action) {
        return $routes[$path] = $action;
    }

    foreach ($routes as $route => $action) {
        $match = [];

        if (preg_match("~^$route$~", $path, $match)) {
            return call_user_func_array($action, $match);
        }
    }
    return event('http.404', [$path,'Route not found']);
}