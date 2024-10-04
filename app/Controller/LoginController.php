<?php
    namespace App\Controller;
    use App\Models\{DatabaseBase,User};

    class LoginController
    {

       function index(){
        require(APP_ROOT.'\pages\login.php');
       }

       function userLogin(){
           $user = new User;
           $user->email = $_POST['email'];
           $user->password = $_POST['password'];
           if($user->login()){
            $_SESSION['name'] = $user->name;
            $_SESSION['id'] = $user->id;
            echo "<h3 class='margin-4' >Logged in  succesfully</h3>
            <br>
            redirecting to Dashboard;
            ";
            header('refresh:3;url=dashboard');
        }


       }
    }


?>