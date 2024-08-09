<?php
session_start();
require __DIR__ . "/Pdo.php";

class userLogin
{

  private $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function authenticateUser($userEmail, $userPass)
    {
         $con = $this->pdo;
        $sql = "SELECT * FROM users  WHERE email = :emai  AND password = :pass";
        $stmt = $con->prepare($sql);
        $stmt->execute(
            array(
                ':emai' => $userEmail,
                ':pass' => $userPass
            )
        );

        $tuple = $stmt->fetch(PDO::FETCH_ASSOC);
        //($tuple);
        print_r($tuple);


        if ($tuple) {
            $_SESSION["email"] = $tuple["email"];
            

            header('Location: /mikes_project/dashboard');
            echo ("success");
            return;
        } else {
            $_SESSION["failure"] = "incorrect password or email";

            header("Location: /mikes_project/login ");

            return;

        }
        //echo($a);

    }
    public function logout(){
          
session_start();
//$id = $_SESSION['id'];
unset($_SESSION["user_name"]);

unset($_SESSION["email"]);
  
session_destroy();
header('Location: /mikes_project/login');
    }



}


$connection = new Connection();
$pdo = $connection->connectDb("portdb", "");

// Create a Student object with the $pdo object
$login = new userLogin($pdo);



