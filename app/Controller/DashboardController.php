<?php
    namespace App\Controller;

    class DashboardController
    {
       function index(){
        require_once(APP_ROOT.'/pages/dashboard.php');
       }

       public function logOut(){
        header('location:login');
        $_SESSION = [];
       }
    }





?>