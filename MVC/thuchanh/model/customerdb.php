<?php
namespace Model;

class CustomerDB
{
  public $connection;

  public function __construct($connection)
  {
      $this->connection = $connection;
  }

  public function create($customer){
      $sql = "INSERT INTO 'customers'('name', 'email', 'address') VALUES (?, ?, ?)";
      $statement = $this->connection->prepare($sql);
      $statement->bindParam(1, $customer->name);
      $statement->bindParam(2, $customer->email);
      $statement->bindParam(3, $customer->address);
      return $statement->execute();
  }
  
  public function getAll()
  {
  $sql = "SELECT * FROM customer";
  $statement = $this->connection->prepare($sql);
  $statement->execute();
  $result = $statement->fetchAll();
  $customers = [];
  foreach ($result as $row) {
      $customer = new Customer($row['name'], $row['email'], $row['address']);
      $customer->id = $row['id'];
      $customers[] = $customer;
  }
  return $customers;
  }
}