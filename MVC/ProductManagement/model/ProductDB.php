<?php
namespace Model;

class ProductDB
{
  public $connection;

  public function __construct($connection)
  {
      $this->connection = $connection;
  }

  public function create($product){
      $sql = "INSERT INTO `products` (`name`, `unitprice`, `describe`, `producer`) VALUES (?, ?, ?, ?)";
      $statement = $this->connection->prepare($sql);
      $statement->bindParam(1, $product->name);
      $statement->bindParam(2, $product->unitPrice);
      $statement->bindParam(3, $product->describe);
	  $statement->bindParam(4, $product->producer);
      return $statement->execute();
  }

  public function get($id) {
        $sql = "SELECT * FROM `products` WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $record = new Product($row['name'], $row['unitprice'], $row['describe'], $row['producer']);
        $record->id = $row['id'];
        return $record;
    
  }

  public function delete($id) {
  	  $sql = "DELETE FROM `products` WHERE id = ?";
	  $statement = $this->connection->prepare($sql);
	  $statement->bindParam(1, $id);
	  return $statement->execute();
  }
  
  public function getAll()
  {
  $sql = "SELECT * FROM products";
  $statement = $this->connection->prepare($sql);
  $statement->execute();
  $result = $statement->fetchAll();
  $products = [];
  foreach ($result as $row) {
      $product = new Product($row['name'], $row['unitprice'], $row['describe'], $row['producer']);
      $product->id = $row['id'];
      $products[] = $product;
  }
  return $products;
  }

public function update($id, $record)
    {
        $sql = "UPDATE `products` SET name = ?, unitprice = ?, `describe` = ?, producer = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $record->name);
        $statement->bindParam(2, $record->unitPrice);
        $statement->bindParam(3, $record->describe);
        $statement->bindParam(4, $record->producer);
        $statement->bindParam(5, $id);
        return $statement->execute();
    }

	public function getByName($name) {
		$sql = 'SELECT * FROM `products` WHERE name LIKE ?';
		$value = "%$name%";
		$statement = $this->connection->prepare($sql);
		$statement->bindParam(1, $value);
		$statement->execute();
		$result = $statement->fetchAll();
		$records = [];
		foreach ($result as $row) {
			$record = new Product($row['name'], $row['unitprice'], $row['describe'], $row['producer']);
			$record->id = $row['id'];
			$records[] = $record;
		}
		return $records;
	}

}