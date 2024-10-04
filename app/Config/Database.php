<?php
namespace App\Config;
use PDO;

Class Database{

    public $conn;
    function __construct(){
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=Xeno", 'root', '');
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }
}




?>
