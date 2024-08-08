<?php
// Inside /classes/Student.php
require __DIR__ . "/Pdo.php";  // This will correctly reference Pdo.php in the same directory


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

     function getStudentsCount(){
         $stmt = $this->pdo->query("SELECT count(*) as count FROM students");
         $counts = $stmt->fetch(PDO::FETCH_ASSOC);
        
         return $counts["count"];

     }
      function getDepartmentsCount(){
         $stmt = $this->pdo->query("SELECT count(*) as count FROM departments");
         $counts = $stmt->fetch(PDO::FETCH_ASSOC);
        
         return $counts["count"];

     }

     function getFacultiesCount(){
         $stmt = $this->pdo->query("SELECT count(*) as count FROM faculty");
         $counts = $stmt->fetch(PDO::FETCH_ASSOC);
        
         return $counts["count"];

     }

    function getStudent(){
           

    }

   function getGenderGroup(){
    $stmt = $this->pdo->query("SELECT gender, COUNT(*) as count FROM students GROUP BY gender");
   $genderData =  $stmt->fetchAll(PDO::FETCH_ASSOC);
     $labels = [];
$data = [];

foreach ($genderData as $row) {
    $labels[] = $row['gender'];
    $data[] = $row['count'];
}

return $chartData = [
    'labels' => $labels,
    'data' => $data
];
}

}

$connection = new Connection();
$pdo = $connection->connectDb("portdb", "");

// Create a Student object with the $pdo object
$student = new Student($pdo);




