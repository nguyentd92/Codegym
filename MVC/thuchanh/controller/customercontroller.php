<?php
namespace Controller;

use Model\Customer;
use Model\CustomerDB;
use Model\DBConnection;

class CustomerController
{

  public $customerDB;

  public function __construct()
  {
      $connection = new DBConnection("mysql:host=localhost:8008;dbname=manage_customer", "root", "");
      $this->customerDB = new CustomerDB($connection->connect());
  }

  public function add()
  {
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
          include 'view/add.php';
      } else {

          $name = $_POST['name'];
          $email = $_POST['email'];
          $address = $_POST['address'];

          $customer = new Customer($name, $email, $address);
          $this->customerDB->create($customer);
          $message = 'Customer created';
          include 'view/add.php';
      }
  }
  public function index(){
    $customers = $this->customerDB->getAll();
    include 'view/list.php';
  }

}