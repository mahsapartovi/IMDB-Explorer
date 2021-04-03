<?php

namespace system\router;

use ReflectionMethod;

class Routing
{
    private $currentRoute;

    public function __construct()
    {
        $this->currentRoute = explode('/', CURRENT_ROUTE);
    }

    // get name of class and check if this class exit or not
    public function run()
    {
        // make path of the class
        $path = realpath(dirname(__FILE__) . "/../../application/controller/" . $this->currentRoute[0] . ".php");
        if (!file_exists($path))
        {
//            echo "404 - File not exists!!hi";
            header("location:error404.php?wrong=10");
//            header("location:application/view/error404.php");
//            include(realpath(dirname(__FILE__) . "/../../application/view/error404.php"));
//            $this->error404();
//            header("HTTP/1.1 404 Not Found");
            exit;
        }
        require_once($path);
        sizeof($this->currentRoute) == 1 ? $method = "home" : $method = $this->currentRoute[1];
        $classPath = "application\controller\\" . $this->currentRoute[0];
        $class = new $classPath();

        // if method exit get id
        if (method_exists($class, $method)) {
            $reflection = new ReflectionMethod($classPath, $method);
            $paramCount = $reflection->getNumberOfParameters();
            if ($paramCount <= count(array_slice($this->currentRoute, 2)))
                call_user_func(array($class, $method), array_slice($this->currentRoute, 2));
            else
                echo "parameter error!!";

        } else
            echo "method not exists!!";
    }

    public function error404()
    {
        http_response_code(404);
        include realpath(dirname(__FILE__) . "/../../application/view/error404.php");
        exit;
    }
}