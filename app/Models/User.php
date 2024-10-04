<?php
namespace App\Models;
use App\Models\DatabaseBase as Db;
use PDO;

Class User extends Db{
   public $name;
   public $email;
   public $password;

  public function register (){
    $sql = "SELECT 'email' FROM user WHERE email = '$this->email'";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount()){
      echo "email already registered, do you want to <a href='login'>login</a>?" ;
      return false;

    }
    else{
      $password = password_hash($this->password, PASSWORD_DEFAULT);
      try {
          $sql = "INSERT INTO user (name, email, password)
          VALUES ('$this->name', '$this->email', '$password')";
          // use exec() because no results are returned
          $this->conn->exec($sql);
          return true;
        } catch(PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
          return false;
        }
    }



  }

  public function login(){
    $sql = "SELECT * FROM user WHERE email = '$this->email'";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if($result){
      if(password_verify($this->password, $result['password'])){
        $this->name = $result['name'];
        $this->id = $result['id'];
        return true;
      }else{
        echo "invalid password <br> try again";
        require_once(APP_ROOT.'/pages/login.php');
    }
    }else{
      echo "user not found";
    }
  }
}

?>