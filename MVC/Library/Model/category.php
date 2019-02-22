<?php
namespace Model;

class Category {
    public $id;
    public $name;

    public function Category($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

}