<?php
    class Circle {
        private $radius;
        private $color;
        private $area;

        function __get($name) {
            return $this->$name;
        }

        function __construct($radius, $color) {
            $this->radius = $radius;
            $this->color = $color;

            $this->area = $this->calculateArea();
        }

        public function calculateArea() {
            return pow($this->radius,2)*pi();
        }        
    }

    class Cylinder extends Circle {
        private $height;
        private $volume;
        
        public function __construct($radius, $color,$height) {
            parent::__construct($radius,$color);
            $this->height = $height;
        }

        public function calculateVolume() {
            return $this->area * $this->height;
        }
    }
?>