<?php
namespace Model;
use PDO;

class DBConnection {
  public $dsn;
  public $user;
  public $password;

  public function DBConnection($dsn, $user, $password)
  {
      $this->dsn = $dsn;
      $this->password = $password;
      $this->user = $user;
  }

  public function connect(){
      return new PDO($this->dsn, $this->user, $this->password);
  }
}