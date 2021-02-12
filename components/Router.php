<?php


class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    // Возврат строки
    private function getURl(){

        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/news');
        }


    }



    public function run()
    {
        $url = $this->getURl();
        echo $url;

        foreach ($this->routes as $uriPattern => $path){
            echo "<br> $uriPattern->$path";

        }

        if(preg_match("~$uriPattern~", $url)){
            echo "+";
        }
    }



}

