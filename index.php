<?php

define('APP_ROOT',__DIR__);

require_once(APP_ROOT.'\vendor\autoload.php');

//autoloader for namespace classes;
spl_autoload_register(function($class){
    $ClassFile = str_replace("\\",DIRECTORY_SEPARATOR,$class.'.php');

    $ClassPath = APP_ROOT.'/app/'.$ClassFile;

    if(file_exists($ClassPath)){
        require_once($ClassPath);
    }


});


session_start();

use App\Services\Route;
require_once(APP_ROOT.'\routes\route.php');
$route = new Route();
$route->handle();



?>