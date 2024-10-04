<?php
    namespace App\Controller;
    use App\Models\{DatabaseBase,
    User
    };

    class RegisterController
    {
       function index(){
        require(APP_ROOT.'\pages\register.php');
       }

       function userRegister(){
        $user = new User;
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        if($user->register()){
            echo "<h3 class='margin-4' >user registered succesfully</h3>
            <br>
            redirecting to login page;
            ";
            header('refresh:3;url=login');
        }
       }
    }


?>