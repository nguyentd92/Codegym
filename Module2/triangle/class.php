<?php
    abstract class Shape {
        public $color;

        abstract function getArea();
        abstract function getPerimeter();
        abstract function toString();
    }

    class Triangle extends Shape {
        private $side1;
        private $side2;
        private $side3;        

        public function __construct($size1 = 1.0,$size2 = 1.0,$size3 = 1.0) {
            $this->side1 = $size1;
            $this->side2 = $size2;
            $this->side3 = $size3;
            $this->color = 'red';
        }

        public function setColor($color) {
            $this->color = $color;
        }

        public function __get($side) {
            return $this->$side;
        }

        public function getPerimeter() {
            return $this->side1 + $this->side2 + $this->side3;
        }

        public function getArea() {
            $p = $this->getPerimeter();
            return round(sqrt($p * ($p - $this->side1) * ($p - $this->side2) * ($p - $this->side3)),3);
        }

        public function toString() {
            return "Color is $this->color, Square is ".$this->getArea().", Perimeter is ".$this->getPerimeter();
        }
    }
?>