<?php
namespace Model;

class Book {
    public $id;
    public $name;
    public $category_id;

    public function Book($id,$name,$category_id) {
        $this->id = $id;
        $this->name = $name;
        $this->category_id = $category_id;
    }
}