<?php
namespace Controller;

use Model\Student;
use Model\StudentDB;
use Model\DBConnection;

class StudentController {
    public $studentDB;

    public function StudentController() {
        $connection = new DBConnection("mysql:host=localhost:3306;dbname=library","root","");
        $this->studentDB = new StudentDB($connection->connect());
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/addStudent.php';
        } else {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
    
            $student = new Student($name,$email,$address);
            $this->studentDB->create($customer);
            $message = 'Student created';
            include 'view/addStudent.php';
        }
    }
    
    public function index() {
        $students = $this->studentDB->getAll();
        include 'view/listStudent.php';
    }
    
}

