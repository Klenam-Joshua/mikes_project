<?php
require "./classes/Pdo.php";

class Student {
    private $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    function createStudent($firstName, $lastName, $gender, $email, $phoneNumber) {
        $con = $this->pdo;

        // Prepare and execute the SQL statement to prevent SQL injection
        $stmt = $con->prepare("INSERT INTO students (first_name, last_name, gender, email, phone_number) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$firstName, $lastName, $gender, $email, $phoneNumber]);
    }

    // this function returns all students
    function getStudents(){
         $stmt = $this->pdo->query("SELECT * FROM students");
         return $stmt;

    }


    function getStudent(){
           

    }
}

// Instantiate Connection and create a PDO object
$connection = new Connection();
$pdo = $connection->connectDb("portdb", "");

// Create a Student object with the $pdo object
$student = new Student($pdo);
$student->createStudent("Joshua", "Klenam", "male", "klenamj34@gmail.com", "0533423323");

?>
