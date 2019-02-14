<?php
    class Shape {
        protected $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function show(){
            return "I'm a shape. My name is $this->name";
        }
    }

    class Circle extends Shape {
        public $radius;

        public function __construct($name,$radius) {
            parent::__construct($name);
            $this->radius = $radius;
        }

        public function calculateArea() {
            return pi() * pow($this->radius, 2);
        }

        public function calculatePerimeter(){
            return pi()*$this->radius*2;
        }
    }

    class Cylinder extends Circle {
        public $height;

        public function __construct($name,$radius,$height) {
            parent::__construct($name,$radius);
            $this->height = $height;
        }

        public function calculateArea() {
            return parent::calculateArea()*2 + parent::calculatePerimeter()*$this->height;
        }

        public function calculateVolume(){
            return parent::calculateArea()*$this->height;
        }
    }

    class Square extends Rectangle {            
        public function __construct($name, $width) {
            parent::__construct($name, $width, $width);               
        }
    }
    
    class Rectangle extends Shape {
        public $width;
        public $height;

        public function __construct($name, $width, $height) {
            parent::__construct($name);
            $this->width = $width;
            $this->height = $height;
        }

        public function calculateArea() {
            return $this->width * $this->height;
        }

        public function calculatePerimeter() {
            return ($this->width + $this->height) * 2;
        }
    }
?>