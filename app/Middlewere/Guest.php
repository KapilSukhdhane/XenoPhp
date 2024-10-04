<?php
namespace App\Middlewere;

class Guest{

    public function index(){
        if(isset($_SESSION['id'])){
            header('location:dashboard');
            exit;
        }
    }
}


?>