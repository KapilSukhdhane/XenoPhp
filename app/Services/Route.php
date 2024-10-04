<?php
namespace App\Services;
use App\Controller;

Class Route {

    private static $routes = [];
    private static $controllerNamespace = 'App\Controller\\';

    public static function add ( $uri,$controller,$action,$method='GET',$middlewere=[]){
        self::$routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'action' => $action,
            'method' =>$method,
            'middlewere' => $middlewere
        ];

    }

    public function handle(){
        $requestURI = $_SERVER['REQUEST_URI'];
        $requestMETHOD = $_SERVER['REQUEST_METHOD'];
        foreach(self::$routes as $routes){
            if ($routes['uri']===$requestURI && $requestMETHOD===$routes['method']){
                if($routes['middlewere']!=[]){
                    $middlewereClass = new ($routes['middlewere'][0]);
                    $middlewereClass->index();
                }
                $controllerClass = new (self::$controllerNamespace.$routes["controller"]);
                $action = $routes['action'];


            $controllerClass->$action();
            return;
            }
        }
        echo "404 page not found";
    }


}


?>