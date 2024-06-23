<?php
class Connection {
    public $connection = null;

    function connectDb($dbname,$dbPassword){
        $this->connection = new PDO("mysql:host=localhost;dbname=$dbname","root","$dbPassword");
      $this->connection ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        return $this->connection;
    }

    function  getConnection(){
          return $this->connection;

    }
}








$pdo  =  new Connection();


$pdo->connectDb("portdb","");
