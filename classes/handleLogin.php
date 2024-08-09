<?php


require __DIR__."/Login.php";
function loginUser() {
    global $login;
    if (isset($_POST["login"])) {
       
        $email = $_POST["email"];
        $pass = $_POST["pass"];

 $login->authenticateUser($email,$pass );
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    loginUser();
  //  $_SESSION["student_created"] = "success";

   // header("Location: /mikes_project/students");
}

