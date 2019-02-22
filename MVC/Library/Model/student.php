<?php
namespace Model;

class Student {
    public $id;
    public $name;
    public $phone;
    public $address;

    public function Student($name,$phone,$address) {
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }
}

