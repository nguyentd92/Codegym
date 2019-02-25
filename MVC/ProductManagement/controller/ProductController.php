<?php
namespace Controller;

use Model\Product;
use Model\ProductDB;
use DB;

class ProductController
{

  public $productDB;

  public function __construct()
  {
      $connection = new DB();
      $this->productDB = new ProductDB($connection->getInstance());
  }

  public function add()
  {
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
          include 'views/add.php';
      } else {

          $name = $_POST['name'];
          $unitPrice = $_POST['unitprice'];
          $describe = $_POST['describe'];
		  $producer = $_POST['producer'];

          $product = new Product($name, $unitPrice, $describe, $producer);
          $isCreated = $this->productDB->create($product);
		  $message = $isCreated ? 'Created' : 'Error'.var_dump($unitPrice);
          include 'views/add.php';
      }
  }
  public function index(){
		$products = $this->productDB->getAll();
    include 'views/list.php';
  }

  public function delete() {
          if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include "views/delete.php";
        } else {
            $id = $_POST['id'];
            $this->productDB->delete($id);
            header('Location: index.php');
        }
  }

      public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'views/update.php';
        } else {
            
            $id = $_POST['id'];
            $record = new Product($_POST['name'], $_POST['unitprice'], $_POST['describe'], $_POST['producer']);
            $this->productDB->update($id, $record);
            header('Location: index.php');
        }
    }

	public function get() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$name = $_POST['name'];
			$products = $this->productDB->getByName($name);
		}
			include 'views/get.php';
		
	}

}