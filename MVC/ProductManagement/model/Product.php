<?php
namespace Model;

class Product
{
  public $id;
  public $name;
  public $unitPrice;
  public $describe;
  public $producer;

  public function __construct($name, $unitPrice, $describe, $producer)
  {
      $this->name = $name;
      $this->unitPrice = $unitPrice;
      $this->describe = $describe;
	  $this->producer = $producer;
  }
}