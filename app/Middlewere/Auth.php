<?php
namespace App\Middlewere;

class Auth{

    public function index(){
        if(!isset($_SESSION['id'])){
            header('location:login');
            exit;
        }
    }
}


?>