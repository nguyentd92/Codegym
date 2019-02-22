<?php
namespace Model;

class CategoryDB {

public $connection;

public function CustomerDB($connection) {
    $this->connection = $connection;
}

public function create($category){
    $sql = "INSERT INTO 'category'('name') VALUES (?)";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $category->name);
    return $statement->execute();
}

public function getAll()
{
$sql = "SELECT * FROM customer";
$statement = $this->connection->prepare($sql);
$statement->execute();
$result = $statement->fetchAll();
$categories = [];
foreach ($result as $row) {
    $category = new Customer($row['name']);
    $category->id = $row['id'];
    $categories[] = $category;
}
return $categories;
}
}
