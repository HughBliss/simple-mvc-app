<?php
class Route
{
    static function start()
    {
        $controller_name = 'index';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }

        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }

        $controller_name = strtolower($controller_name) . '_controller';
        $action_name = strtolower($action_name) . '_action';

        $controller_file = $controller_name . '.php';
        $controller_path = "../src/controllers/" . $controller_file;
        if (file_exists($controller_path)) {
            include $controller_path;
        } else {
            $controller_name = 'notfound_controller';
            include '../src/controllers/' . $controller_name . '.php';
        }
        $controller = new $controller_name;
        $action = $action_name;

        if (method_exists($controller, $action)) {
            $controller->$action();
        }
    }
}
