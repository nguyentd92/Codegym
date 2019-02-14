<?php
    class Circle {
        public $radius;
        public $color;
        public $area;

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
        public $height;
        public $volume;
        
        public function __construct($radius, $color,$height) {
            parent::__construct($radius,$color);
            $this->height = $height;
        }

        public function calculateVolume() {
            return $this->area * $this->height;
        }
    }
?>