<?php

class Router
{
    //Splits URL to parts, and call class and methods
    public static function run()
    {
        $uri = explode('/', $_SERVER['REQUEST_URI']);
        $classname = $uri[1];
        $method = $uri[2];
        $id = $uri[3];
        $pathToClass = './Controllers/' . $classname . 'Controller.php';
        if (file_exists($pathToClass)) {
            require_once($pathToClass);
            $obj = new $classname;
            if (method_exists($obj, $method)) {
                $obj->$method();
            } else {
                header('Location: ' . URL . '/home/addProduct');
            }
        } else {
            header('Location: ' . URL . '/home/addProduct');
        }
    }
}
