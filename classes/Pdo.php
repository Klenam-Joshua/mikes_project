<?php
class Pdo {


    function getconnection($dbname,$dbPassword){
        $pdo = new PDO("mysql:host=localhost;dbname=$dbname",'root',"$dbPassword");
      $pdo ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}



$pdo  =  new Pdo();

//  specify your database name, and password as an argument
$pdo->getconnection();