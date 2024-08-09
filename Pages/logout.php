<?php
  function logout(){
          
session_start();
//$id = $_SESSION['id'];
unset($_SESSION["user_name"]);

unset($_SESSION["email"]);
  
session_destroy();
header('Location: /mikes_project/login');
    }
    logout()
    ?>