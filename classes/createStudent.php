<?php
session_start();
require "./Student.php";

   $connection = new Connection();
$pdo = $connection->connectDb("portdb", "");

// Create a Student object with the $pdo object
$student = new Student($pdo);


function addStudent($student) {
    if (isset($_POST["new_student"])) {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $student->createStudent($firstName, $lastName, $gender, $email, $phone);
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    addStudent($student);
    $_SESSION["student_created"] = "success";

    header("Location: /mikes_project/students");
}

